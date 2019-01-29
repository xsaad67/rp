<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CrawlLinks;
 use App\Service\Crawl\CrawlService;
use App\Recipe;
use App\Service\Upload\Imgur;
use App\Service\Crawl\CrawlJson;


ini_set('max_execution_time', 4800);

class CrawlController extends Controller
{
    private $ingredientsArray;

    public function index(){

        $service = new CrawlJson();
        $json = $service->saveFoodNetwork("https://www.foodnetwork.com/recipes/a-bologna-calamari-scallops-and-clams-with-roasted-fingerlings-and-arugula-salad-recipe-2040576");
        dd($json);
       
    }

   

    public function epicriciousSingle(){

    	
        $links = CrawlLinks::where('isActive','0')->get();
        

        foreach($links as $link){

            $recipe= new Recipe();
            $crawler = Goutte::request('GET', $link->link);
            $recipe->description = $crawler->filter("div.dek > p")->count() > 0 ? $crawler->filter("div.dek > p")->text() :  'nope';
            $recipe->featuredImage = $crawler->filter("img.photo")->count() > 0 ? $crawler->filter("img.photo")->attr("srcset") :  NULL;
            $recipe->title = $crawler->filter('h1[itemprop="name"]')->text();
            $recipe->apiLink = $link->link;
            
            $serving = $crawler->filter('dd[itemprop="recipeYield"]')->count() > 0 ? $crawler->filter('dd[itemprop="recipeYield"]')->text() : NULL;
            $recipe->serves =  preg_match('(\d+[\/\d. ]*|\d)',$serving,$matches) ? $matches[0] : '';
            $recipe->user_id =1;
            $recipe->cuisine =1;
            
            $isSave=$recipe->save();

            $lastSaveId= $recipe->id;
            $ingridents = $crawler->filter("ul.ingredients");
            $ingridents->filter("li")->each(function($in) use ($lastSaveId){
                $ingridents = new RecipeIngridents();
                $ingridents->note = $in->text();
                $ingridents->recipe_id = $lastSaveId;
                $ingridents->save();
            });

            if($isSave){
                $link->isActive =1;
                $link->save();
            }

        }  
    }


    public function getCat()
    {

        $link = "https://myfoodbook.com.au/recipes/categories?sort_by=name&sort_order=DESC";
        $crawler = Goutte::request('GET',$link);

        $crawler->filter('div.field-item > h2 > a')->each(function($node){


            $catName = ucwords(strtolower($node->text()));

            $cat = Category::firstOrNew(['name'=>$catName]);
            $cat->save();

        });
    }



    public function getCuisine()
    {
        $link = "https://www.listchallenges.com/world-cuisines";

        $crawler = Goutte::request('GET',$link);

        $crawler->filter('div.item-name')->each(function($node){

            $cuiName = trim(str_replace(" Food","", $node->text()));

            $cuisine = \App\Cuisine::firstOrNew(['name'=>$cuiName]);
            $cuisine->save();
            dump($cuiName); 
        });
        
    }


    public function crawlFoodNetwork()
    {
        $url = "https://www.foodnetwork.com/recipes/ina-garten/16-bean-pasta-e-fagioli-3612570";
        $jsonService = new CrawlService();
        $isSave = $jsonService->scrapeJsonSchema($url);
        dd($isSave);
    }


    public function crawlGeniusKitchen(){

    	$getLinks = CrawlLinks::
	    				where('isPublished',0)
						->where('website','geniuskitchen')
						->take(50)
						->get();


		foreach($getLinks as $url){

					
	        $jsonService = new CrawlService();
	        $scrapeRecipe = $jsonService->scrapeJsonSchema($url->link);

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
		    $recipe->website =$url->website;
		    $recipe->source = $url->link;
	        $isSave = $recipe->save();
	        
		    if($isSave){
		        if(isset($scrapeRecipe->recipeIngredient)){
		            $jsonService->savingIngredients($scrapeRecipe->recipeIngredient,$recipe->id);
		        }

		        if(isset($scrapeRecipe->recipeInstructions)){
	        		$instructions=[];
		        	foreach($scrapeRecipe->recipeInstructions as $inst){
		        		$instructions[]=$inst->text;
		        	}

		            $jsonService->savingInstructions($instructions,$recipe->id);
		        }

		        if(isset($scrapeRecipe->keywords)){
		            $jsonService->savingTags($scrapeRecipe->keywords,$recipe->id);
		        }

		        $url->isPublished=1;
		        $url->save();
		    }
	   	}//End of getLinks

	   	// return $publishedRecipe;
    }

    public function crawlKraftRecipe(){ 

    	$getLinks = CrawlLinks::where('isPublished',0)
    							->where('website','kraftrecipes')
    							->take(50)
    							->get();
  
    	foreach($getLinks as $url){
	        $jsonService = new CrawlService();
	        $isSave = $jsonService->saveJsonRecipe($url->link,$url->website);
	        if($isSave){		
		        $url->isPublished=1;
		        $url->save();
	        }
    	}
            
    }

           

    public function crawlAllRecipe(){
        $url="https://www.allrecipes.com/recipe/219874/italian-turkey-meatballs";

        $crawler = Goutte::request('GET',$url);
        $title = $crawler->filter('h1[itemprop="name"]')->text();
        dd($title);
        $description = $crawler->filter('div[itemprop="description"]')->text();
        $image = $crawler->filter('img[itemprop="image"]')->attr("src");
        
        $crawler->filter('span[itemprop="recipeIngredient"]')->each(function($node){
          
           $ingrident = trim($node->text());

           dump($ingrident);
        });

        $crawler->filter('span.recipe-directions__list--item')->each(function($node){
          
           $step = trim($node->text());

           dump($step);
        });

        dump($title);

        dump($description);

        dump($image);
    }



}

    