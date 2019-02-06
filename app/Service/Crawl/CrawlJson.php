<?php
namespace App\Service\Crawl;

use App\Service\Crawl\CrawlService;
use App\Recipe;

class CrawlJson extends CrawlService{


	public function saveKraftRecipe($url,$website="kraftrecipes"){

		$scrapeRecipe = $this->scrapeJsonSchema($url);
		if(is_null($scrapeRecipe)){return;}
		$recipe = new Recipe();
	    $recipe->title = issetOrNull($scrapeRecipe->name);
	    $recipe->category_id = $this->isCategoryExist(issetOrNull($scrapeRecipe->recipeCategory));
	    $recipe->cuisine_id = $this->isCuisineExist(issetOrNull($scrapeRecipe->recipeCuisine));
	    $recipe->description = issetOrNull($scrapeRecipe->description);
	    $recipe->user_id = rand(1,20);
	    $recipe->features = ["nutrition"=>issetOrNull($scrapeRecipe->nutrition)];
	    $recipe->cookingTime= issetOrNull($scrapeRecipe->cookTime);
	    $recipe->preprationTime = issetOrNull($scrapeRecipe->prepTime);
	    $recipe->totalTime = issetOrNull($scrapeRecipe->totalTime);
	    $recipe->serves = extractFractionOrNumber(issetOrNull($scrapeRecipe->recipeYield));
	    $recipe->cuisine_txt = issetOrNull($scrapeRecipe->recipeCuisine);
	    $recipe->tags = issetOrNull($scrapeRecipe->keywords);
	    $recipe->category_txt = issetOrNull($scrapeRecipe->recipeCategory);
	    $recipe->featuredImage = issetOrNull($scrapeRecipe->image);
	    $recipe->website =$website;
	    $recipe->source = $url;
	    $recipeIngredient=issetOrNull($scrapeRecipe->recipeIngredient);
        $recipeInstruction=issetOrNull($scrapeRecipe->recipeInstructions);
        $keywords=issetOrNull($scrapeRecipe->keywords);

        if(isset($recipeInstruction)){
        	$instructions=[];
	    	foreach($recipeInstruction as $inst){
	    		$instructions[]=$inst->text;
	    	}
	    	$recipeInstruction=$instructions;
        }
        
        $isSave = $recipe->save();
        $allWork = $this->afterSave($isSave,$recipe->id,$recipeIngredient,$recipeInstruction,$keywords);
	   	return $allWork;
	}

	public function saveGeniusKitchen($url,$website="geniuskitchen"){

        $scrapeRecipe = $this->scrapeJsonSchema($url);
        if(is_null($scrapeRecipe)){return;}
        $recipe = new Recipe();
	    $recipe->title = issetOrNull($scrapeRecipe->name);
	    $recipe->category_id = $this->isCategoryExist(issetOrNull($scrapeRecipe->recipeCategory));
	    $recipe->cuisine_id = $this->isCuisineExist(issetOrNull($scrapeRecipe->recipeCuisine));
	    $recipe->user_id = rand(20,40);
	    $recipe->description = issetOrNull($scrapeRecipe->description);
	    $recipe->features = ["nutrition"=>issetOrNull($scrapeRecipe->nutrition)];
	    $recipe->cookingTime= issetOrNull($scrapeRecipe->cookTime);
	    $recipe->preprationTime = issetOrNull($scrapeRecipe->prepTime);
	    $recipe->totalTime = issetOrNull($scrapeRecipe->totalTime);
	    $recipe->serves = extractFractionOrNumber(issetOrNull($scrapeRecipe->recipeYield));
	    $recipe->cuisine_txt = issetOrNull($scrapeRecipe->recipeCuisine);
	    $recipe->tags = issetOrNull($scrapeRecipe->keywords);
	    $recipe->category_txt = issetOrNull($scrapeRecipe->recipeCategory);
	    $recipe->featuredImage = issetOrNull($scrapeRecipe->image);
	    $recipe->website =$website;
	    $recipe->source = $url;
        $recipeIngredient=issetOrNull($scrapeRecipe->recipeIngredient);
        $recipeInstruction=issetOrNull($scrapeRecipe->recipeInstructions);
        $keywords=issetOrNull($scrapeRecipe->keywords);

        if(isset($recipeInstruction)){
        	$instructions=[];
	    	foreach($recipeInstruction as $inst){
	    		$instructions[]=$inst->text;
	    	}
	    	$recipeInstruction=$instructions;
        }
        
        $isSave = $recipe->save();

        $allWork = $this->afterSave($isSave,$recipe->id,$recipeIngredient,$recipeInstruction,$keywords);
        return $allWork;
	}

	public function saveFoodNetwork($url,$website="foodnetwork"){

		$jsonService = new CrawlService();
        $scrapeRecipe = $jsonService->scrapeJsonSchema($url);
        if(is_null($scrapeRecipe)){return;}
        $recipe = new Recipe();
	    $recipe->title = issetOrNull($scrapeRecipe->name);
	    $recipe->category_id = $this->isCategoryExist(issetOrNull($scrapeRecipe->recipeCategory));
	    $recipe->cuisine_id = $this->isCuisineExist(issetOrNull($scrapeRecipe->recipeCuisine));
	    $recipe->user_id = rand(20,40);
	    $recipe->description = issetOrNull($scrapeRecipe->description);
	    $recipe->features = ["nutrition"=>issetOrNull($scrapeRecipe->nutrition)];
	    $recipe->cookingTime= str_replace("P0Y0M0DT", "",issetOrNull($scrapeRecipe->cookTime));
	    $recipe->preprationTime = str_replace("P0Y0M0DT", "",issetOrNull($scrapeRecipe->prepTime));
	    $recipe->totalTime = str_replace("P0Y0M0DT", "",issetOrNull($scrapeRecipe->totalTime));
	    $recipe->serves = extractFractionOrNumber(issetOrNull($scrapeRecipe->recipeYield));
	    $recipe->cuisine_txt = issetOrNull($scrapeRecipe->recipeCuisine);
	    $recipe->tags = issetOrNull($scrapeRecipe->keywords);
	    $recipe->category_txt = issetOrNull($scrapeRecipe->recipeCategory);
	    $recipe->featuredImage = is_null(issetOrNull($scrapeRecipe->image)) ? null : issetOrNull($scrapeRecipe->image->url);
	    $recipe->website =$website;
	    $recipe->source = $url;
	    $recipeIngredient=issetOrNull($scrapeRecipe->recipeIngredient);
        $recipeInstruction=issetOrNull($scrapeRecipe->recipeInstructions);
        $keywords=issetOrNull($scrapeRecipe->keywords);
        
        $isSave = $recipe->save();
        $allWork = $this->afterSave($isSave,$recipe->id,$recipeIngredient,$recipeInstruction,$keywords);
   		return $allWork;
	}

}





?>