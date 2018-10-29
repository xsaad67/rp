<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;
use App\Ingrident;
use App\CrawlLinks;

ini_set('max_execution_time', 180);

class CrawlController extends Controller
{
    

    public function index(){

    	for($i=200;$i<=210;$i++){
	    	$page = "https://www.epicurious.com/search/?cuisine=american&page=".$i;

	    	$crawler = Goutte::request('GET', $page);

	    	$crawler->filter('.view-complete-item')->each(function($node) use (&$links,$i){

	    		$link = $node->attr("href");
	    		$isRecipe = explode("/",$link);
	    		// dump($link);
	    		if($isRecipe[1]==="recipes"){
	    			// session()->push("links", ["link"=> $link, "title" => $node->attr("title"), "website"=>"epicurious",""] );
	    		}
	    	});
    	}


    }



    public function epicriciousSingle(){

    	// dd(session("links"));
    	
    	$link = "https://www.epicurious.com/recipes/food/views/sourdough-bread-with-marinated-manchego-cheese-and-roasted-peppers-107684";
        $crawler = Goutte::request('GET', $link);

        $image = $crawler->filter("img.photo")->count() > 0 ? $crawler->filter("img.photo")->attr("src") :  NULL;
        dd($image);
    
    	 $title = $crawler->filter('h1[itemprop="name"]')->text();
    	
    	
    	 $ingridents = $crawler->filter("ul.ingredients");

    	 $ingridents->filter("li")->each(function($in){
    		$ing= $in->text();
         });
    }


    public function getIng(){



            $page = "http://recipe.localhost/ing";

            $crawler = Goutte::request('GET', $page);
            $crawler->filter("p.ing")->each(function($node) {
               // echo $node->text();

                $ing = new Ingrident();
                $ing->name=$node->text();
                $ing->parent_id=request('q');
                $ing->save();

            });
    }












}

    