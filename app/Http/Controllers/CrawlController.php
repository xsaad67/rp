<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;
use App\Ingrident;
use App\CrawlLinks;
use App\Category;

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

    /**
    *   This method is to crawl campbells recipe categories 
    *    But Right now in no use just maintaining it for legacy 
    *    so in future if supposed to have a need
    *
    **/
    public function campbellsRecipeCategory(){

        $link = "https://www.campbells.com/kitchen/categories/";

        $crawler = Goutte::request('GET',$link);
        $crawler->filter('div.other-category')->eq(2)->each(function($node){

            $catName = ucwords(strtolower($node->filter('p.category-title')->text()));
            // dd($catName);
            $parent = Category::firstOrNew(['name'=>$catName]);
            $parent->save();
            $parent_id = $parent->id;

            $node->filter('ul > li > a')->each(function($hello) use($parent_id){
                $cat = Category::firstOrNew(['name'=>$hello->text()]);
                $cat->parent_id=$parent_id;
                $cat->save();
                dump($hello->text());
            });


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

    public function crawlMicroData(){
        $url="https://www.allrecipes.com/recipe/219874/italian-turkey-meatballs";

        $crawler = Goutte::request('GET',$url);

        $crawler->filter('body')->each(function($node){
            $title = $node->filter('h1[itemprop="name"]')->text();
            dump($title);
        });
    }


}

    