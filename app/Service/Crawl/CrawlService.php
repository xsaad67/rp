<?php 

namespace App\Service\Crawl;

use Goutte;
use App\Ingrident;
use DOMDocument;
use DOMXpath;
use App\Recipe;
use App\RecipeInstruction;
use App\RecipeIngridents;
use App\Cuisine;
use App\Tag;
use App\Taggable;



class CrawlService{

	private $ingredientsArray;
	
	public function __construct(){
	    $this->ingredientsArray = Ingrident::pluck("name","slug");
	}

	public function scrapeJsonSchema($url,$lookUp = 0){
		$html = file_get_contents($url);
		$dom  = new DOMDocument();
		libxml_use_internal_errors(1);
		$dom->loadHTML( $html );
		$xpath = new DOMXpath($dom);

		$jsonScripts = $xpath->query('//script[@type="application/ld+json"]');
		@$json = trim($jsonScripts->item(0)->nodeValue);

		$data = json_decode($json);

		return $data;
	}

    public function savingTags($tags,$recipeId){
        $tags = explode(",",$tags);
        foreach($tags as $tag){
            $tag = Tag::firstOrCreate(['name'=>$tag]);
            if($tag->id){
                $taggable = new Taggable();
                $taggable->tag_id = $tag->id;
                $taggable->taggable_id = $recipeId;
                $taggable->taggable_type = "App\Recipe";
                $taggable->save();
            }
        }
    }
   

    public function savingInstructions($scrapeInstructions , $recipeId)
    {
        foreach($scrapeInstructions as $instruction){
            $step = new RecipeInstruction();
            $step->description = $instruction;
            $step->recipe_id = $recipeId;
            $step->save();
        }
    }

    public function savingIngredients($scrapeIngredients,$recipeId){

        foreach($scrapeIngredients as $ingredient){

            $recipeIngrident = new RecipeIngridents();


            $taggedIng =ingredientsToLink($this->ingredientsArray,$ingredient);
            $recipeIngrident->note =  $ingredient;
            $recipeIngrident->displayNote = $taggedIng['note'];
            $recipeIngrident->ingrident = $taggedIng['matched'];
            $recipeIngrident->recipe_id = $recipeId;
            
            $recipeIngrident['displayNote'] = \DB::connection()->getPdo()->quote(utf8_encode($recipeIngrident['displayNote']));
            $recipeIngrident->save();
        }

    }


	public function SaveJsonRecipe($url,$website){

		$scrapeRecipe = $this->scrapeJsonSchema($url);
		$recipe = new Recipe();
	    $recipe->title = issetOrNull($scrapeRecipe->name);
	    $recipe->description = issetOrNull($scrapeRecipe->description);
	    $recipe->user_id = rand(1,20);
	    $recipe->description = issetOrNull($scrapeRecipe->description);
	    $recipe->features = ["nutrition"=>issetOrNull($scrapeRecipe->nutrition)];
	    $recipe->cookingTime= issetOrNull($scrapeRecipe->cookTime);
	    $recipe->preprationTime = issetOrNull($scrapeRecipe->cookTime);
	    $recipe->serves = extractFractionOrNumber(issetOrNull($scrapeRecipe->recipeYield));
	    $recipe->cuisine_txt = issetOrNull($scrapeRecipe->recipeCuisine);
	    $recipe->tags = issetOrNull($scrapeRecipe->keywords);
	    $recipe->category_txt = issetOrNull($scrapeRecipe->recipeCategory);
	    $recipe->featuredImage = issetOrNull($scrapeRecipe->image);
	    $recipe->website =$website;
	    $recipe->source = $url;

	    $isSave = $recipe->save();

	    if($isSave){
	        if(isset($scrapeRecipe->recipeIngredient)){
	            $this->savingIngredients($scrapeRecipe->recipeIngredient,$recipe->id);
	        }

	        if(isset($scrapeRecipe->recipeInstruction)){
	            $this->savingIngredients($scrapeRecipe->recipeIngredient,$recipe->id);
	        }

	        if(isset($scrapeRecipe->keywords)){
	            $this->savingTags($scrapeRecipe->keywords,$recipe->id);
	        }
	        return true;
	    }
	}

}
?>