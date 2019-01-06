<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrawlLinks;
use App\Recipe;
use App\RecipeIngridents;

use Goutte;

ini_set('max_execution_time', 480);

class CrawlLinksController extends Controller
{


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
        $url = "http://www.rottentomatoes.com/m/jurassic_world/";
        $crawler = Goutte::request('GET', $url);
        $microdata_arr = array();

        //xpath expression to retrieve several attributes
        $crawler->filterXPath("//*[@itemtype='http://www.schema.org/Movie']//*[contains('image genre actors director', @itemprop)]")
                ->each(function($node) use (&$microdata_arr){
                    $ret = $this->getNodeStructuredData($node, 'microdata');           
                    $microdata_arr[$ret['property']][] = $ret['value'];
                });
        dump($microdata_arr);  
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


    public function allRecipesData(){
        
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
