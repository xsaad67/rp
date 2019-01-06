<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrawlLinks;
use App\Recipe;
use App\RecipeIngridents;

use Goutte;

ini_set('max_execution_time', 1480);

class CrawlLinksController extends Controller
{


    public function kraft()
    {
      

        for($i=0;$i<=1000;$i+=100){

            $url = "https://www.kraftrecipes.com/skavastream/studio/rendertemplate?campaignId=142&widgetId=52&version=prod&view=KraftRecipies&pageId=2&pageUrl=recipes/2/recipes&isFromLoadMore=true&limit=100&offset=".$i."&idLoopLimit=100";
            $content = file_get_contents($url);
            $json = json_decode($content);
            $json = $json->content;

            $doc = new \DOMDocument();
            @$doc->loadHTML($json);
            $links = $doc->getElementsByTagName('a');
            foreach($links as $link) {
                $link = "https://www.kraftrecipes.com".$link->getAttribute('href');
                $links = CrawlLinks::firstOrNew(['link'=>$link]);
                $links->website = "kraftrecipes";
                $links->save();
            }
        }


      
    }

    public function geniusKitchen(){

        for($i=40;$i<=500;$i+=10){

            echo "Iteration is: ".$i."<br>";

           
            $url = "https://api.geniuskitchen.com/services/mobile/fdc/search/sectionfront?pn=".$i."&numRecords=30&recordType=Recipe&collectionId=1";

            $xmlstr = file_get_contents($url);
            $js = json_decode($xmlstr);

            foreach($js->response->results as $result){
                $link = $result->record_url;
                $links = CrawlLinks::firstOrNew(['link'=>$link]);
                $links->website = "geniuskitchen";
                $links->save();
                echo $links->id."<br><br>";
            }
        }
       

        
    }

    public function foodnetwork()
    {
            $url="https://www.foodnetwork.com/recipes/recipes-a-z/d";
            $crawler = Goutte::request('GET',$url);
            $paginate=$crawler->filter('li.o-Pagination__a-ListItem:nth-last-child(2)')->first()->text();
            $crawler->filter("li.m-PromoList__a-ListItem > a")->each(function($node){
                $link = $node->attr("href");
                $links = CrawlLinks::firstOrNew(['link'=>$link]);
                $links->website = "foodnetwork";
                $links->save();
            });

            if($paginate>1){
                for($i=2;$i<=$paginate;$i++){
                   
                    $url.="/p/".$i;
                    $crawler = Goutte::request('GET',$url);
                    $crawler->filter("li.m-PromoList__a-ListItem > a")->each(function($node){
                        $link = $node->attr("href");
                        $links = CrawlLinks::firstOrNew(['link'=>$link]);
                        $links->website = "foodnetwork";
                        $links->save();
                    });
                }

            }

    }


    public function scrapeMicro()
    {
        $url = "https://www.allrecipes.com/recipe/22592/almond-buttercrunch-candy-i/?internalSource=previously%20viewed&referringContentType=Homepage";
        $crawler = Goutte::request('GET', $url);
        $microdata_arr = array();

        //xpath expression to retrieve several attributes
        // dump($crawler->filter("[itemprop='totalTime']")->first()->attr("datetime"));
        // dump($crawler->filter("[itemprop='name']")->first()->text());
        $crawler->filterXPath("//*[@itemtype='http://schema.org/Recipe']")->each(function($node){
            dump($node->filter("[itemprop='name']")->first()->text());
        });
    }

    


    public function allrecipes()
    {
        $url = "https://www.allrecipes.com/";
        for($i=1; $i<=3;$i++){
            if($i>1){
                $url = "https://www.allrecipes.com/?page=".$i;
            }
            $crawler = Goutte::request('GET',$url);
            $crawler->filter('h3.fixed-recipe-card__h3 > a')->each(function($node){
                $link=$node->attr('href');
                $links = CrawlLinks::firstOrNew(['link'=>$link]);
                $links->website = "allrecipes";
                $links->save();
                echo $links->id."<br><br>";
            });


        }
    }

    
    public function epicuriousData(Request $request){

        
 	
    	for($i=200;$i<=210;$i++){
	    	$page = "https://www.epicurious.com/search/?cuisine=american&page=".$i;

	    	$crawler = Goutte::request('GET', $page);

	    	$crawler->filter('.view-complete-item')->each(function($node) use (&$links,$i){

	    		$link = $node->attr("href");
	    		$isRecipe = explode("/",$link);

	    		if($isRecipe[1]==="recipes"){
	    			$links = CrawlLinks::firstOrNew(['link'=>"https://www.epicurious.com".$link]);
	    			$links->website = "epicurious";
	    			$links->cuisine = 'american';
	    			$links->save();
	    		}
	    	});
    	}

    }





    public function randomUsers(){

        //Get User Info first and put them into session array
        $array  = [];
        $html = "https://randomuser.me/api/?results=100&inc=name,gender,nat,picture,email&nat=us,dk,fr,gb";
        $json = json_decode(file_get_contents($html));

        foreach($json->results as $key=>$row){

            $array[] = [
                        "name" => $row->name->first . " " .$row->name->last,
                        "email" => $row->email,
                        "avatar" => $row->picture->medium
                    ];
        }

        //Putting data into session array
        session()->put("users",$array);


        //Save stored session into user table
        foreach(session()->get('users') as $key=>$row){

            $fileName = createFileName($row['avatar'],'avatar');
            $user = new User();
            $user->name = $row['name'];
            $user->email = $row['email'];
            $user->avatar = $fileName;
            $user->password = bcrypt("secret");
            $folderName = "img/avatar/";
            $image = file_get_contents($row['avatar']);

            file_put_contents(public_path($folderName.$fileName), $image);
            $user->save();
         }
    
    }



  
}
