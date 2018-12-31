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
