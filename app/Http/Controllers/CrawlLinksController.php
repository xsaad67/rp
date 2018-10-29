<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrawlLinks;
use App\Recipe;
use App\RecipeIngridents;

use Goutte;

ini_set('max_execution_time', 180);

class CrawlLinksController extends Controller
{
    public function insertingData(){



    	for($i=200;$i<=210;$i++){
	    	$page = "https://www.epicurious.com/search/?cuisine=american&page=".$i;

	    	$crawler = Goutte::request('GET', $page);

	    	$crawler->filter('.view-complete-item')->each(function($node) use (&$links,$i){

	    		$link = $node->attr("href");
	    		$isRecipe = explode("/",$link);
	    		// dump($link);
	    		if($isRecipe[1]==="recipes"){
	    			$links = CrawlLinks::firstOrNew(['link'=>"https://www.epicurious.com".$link]);
	    			$links->website = "epicurious";
	    			$links->cuisine = 1;
	    			$links->save();

	    			// session()->push("links", ["link"=> $link, "title" => $node->attr("title"), "website"=>"epicurious",""] );
	    		}
	    	});
    	}

    }





    public function epicriciousSingle(){

    	// dd(session("links"));

    	
    	$link = "https://www.epicurious.com/recipes/food/views/sourdough-bread-with-marinated-manchego-cheese-and-roasted-peppers-107684";

    	$recipe= new Recipe();

        $crawler = Goutte::request('GET', $link);

        $recipe->description = $crawler->filter("div.dek > p")->count() > 0 ? $crawler->filter("div.dek > p")->text() :  'nope';


        $recipe->featuredImage = $crawler->filter("img.photo")->count() > 0 ? $crawler->filter("img.photo")->attr("src") :  NULL;
      	
    
    	 $recipe->title = $crawler->filter('h1[itemprop="name"]')->text();


    	 $serving = $crawler->filter('dd[itemprop="recipeYield"]')->text();
    	 $recipe->serves =  preg_replace('/[^0-9.]/','',$serving);
    	 $recipe->user_id =1;
    	 $recipe->cuisine =1;
    	
    	$recipe->save();

    	$lastSaveId= $recipe->id;
    	
    	 $ingridents = $crawler->filter("ul.ingredients");

    	 $ingridents->filter("li")->each(function($in) use ($lastSaveId){
    	 	$ingridents = new RecipeIngridents();
    	 	$ingridents->note = $in->text();
    	 	$ingridents->recipe_id = $lastSaveId;
    	 	$ingridents->save();
         });


    	// $links = CrawlLinks::where('isActive','1')->get();

    	// foreach($links as $link){
    	//  $link->isActive =0;
    	//  $link->save();
    	// }

         
    }



  
}
