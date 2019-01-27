<?php 




function checkIso($date){
	
	try{
		$date =  Carbon\CarbonInterval::make($date)->forHumans();
	}catch(\Throwable $ex){
		$date=null;
	}

	return $date;
}



function convertIsoToNormal($string){
	try{
		$time = new DateInterval($string);
		$hour = ($time->h==0) ? "00:" : $time->h.":";
		$minute = ($time->i==0) ? "00:" : $time->i.":";
		$seconds = ($time->s==0) ? "00" : $time->s;
		
		$time = date("Y-m-d")." ".$hour.$minute.$seconds;
		return $time;

	}catch(Exception $ex){
		return NULL;
	}
}

function issetOrNull(&$property){
	return $property =  isset($property) ? $property : NULL;
}

function extractFractionOrNumber($serving){
	$serving = preg_match('(\d+[\/\d. ]*|\d)',$serving,$matches) ? $matches[0] : NULL;
	return trim($serving);
}

function getFeaturedMedia($filename="",$template="medium"){
    return url("/img/cache")."/".$template."/".$filename;
}


if(!function_exists('getDomainName')){

	function getDomainName($url)
	{
	      $urlobj=parse_url($url);
	      if(!array_key_exists('host', $urlobj)) { return false; }
	      $domain=$urlobj['host'];
	      if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
	        return $regs['domain'];
	      }
	      return false;
	}

}



/**@ingredients array in form ["slug"=>"name"] 
*@String 
*Return String with link
*
*This helper Funtion takes an array of Ingredients
*To give ingredients you can do 
*Ingrident::pluck("name","slug");
*
**/


if(!function_exists('ingredientsToLink')){

function ingredientsToLink($ingredients,$string){
	$string = strtolower($string);
	$matchedWord = "";
   foreach($ingredients as $ingKey=>$ing){
        
        if(preg_match('/\b'.$ing.'\b/',$string,$matches)){
        	$matchedWord = $matches[0];
            $url = "<a href='/ingridients/".urlencode(trim($ingKey))."'>".trim($ing)."</a>";

            $url = "<a href='/ingridients/".urlencode(trim($ingKey))."'>".trim($ing)."</a>";
            $string= str_replace($ing," ".$url." ",$string);
        }

    }
    $notesIng = ["matched"=>$matchedWord, "note" => $string];


    return $notesIng;
}

}

function stringIsNullOrWhitespace($text){
    return ctype_space($text) || $text === "" || $text === null;
}


if(!function_exists('breakStringLine')){
	
	function breakStringLine($string){
		$array =[];
		$string = explode("\n", $string);

		foreach($string as $key=>$row){

			if(!stringIsNullOrWhitespace($row)){
				$array[]= $row;
			}
		} 
		return $array;
	}

}


function parserIndgredient($IngredientString){
	$IngredientData = array();
	if (preg_match("/[0-9][\/][0-9]|[0-9]/", $IngredientString)) { //Check To See If The Ingredient contains a certain amount.
		preg_match('/[0-9][\/][0-9]|[0-9]/', $IngredientString, $matches);
		$IngredientData['quantity'] = trim($matches[0]);
		
		//Check To See If We Have a Matching Unit in our $IngredientString
		$Units = getCookingUnits();
		
		//Check To See If We Can Find a Matching Unit
		foreach($Units as $Unit){
			if (preg_match("/\s+".$Unit."\s+/", $IngredientString)) {
				preg_match("/\s+".$Unit."\s+/", $IngredientString, $matches);
				$IngredientData['unit'] = trim($matches[0]);
				break;
			}
		}
		
		
		//Find The Name of The Item
		//Remove The Unit and Amount 
		$FixedString = $IngredientString;
		// return $FixedString;
		$FixedString =  str_replace($IngredientData['unit'], "", $FixedString) ;
		$FixedString = str_replace($IngredientData['quantity'], "", $FixedString);
		
		
		$ArrayString = explode(",", $FixedString);
		if(count($ArrayString) > 1){
			$IngredientData['info'] = trim($ArrayString[1]);
		} 
		$IngredientData['name'] = trim($ArrayString[0]);
		
		

	} else {
		//We Dont a have an ingrident quanity thus we could only have an ingredient and possibly an info value	
		//We Can spilt these two strings up by spilting on the ","
		$ArrayString = explode(",", $IngredientString);
		if(count($ArrayString) > 4){
			$IngredientData['info'] = $ArrayString[1];
		} 
		$IngredientData['name'] = $ArrayString[0];
	}
	
	return $IngredientData;
}

//This function will return all of the useful cooking units
function getCookingUnits(){
	$Units = array();
	
	$Units[] = "teaspoon"; 
	$Units[] = "t"; 
	$Units[] = "tsp."; 
	
	$Units[] = "ounce";
	$Units[] = "oz";
	$Units[] = "oz.";
	 
	
	
	$Units[] = "pounds";
	$Units[] = "pound";  
	$Units[] = "lb"; 
	$Units[] = "lbs"; 
	$Units[] = "lb."; 
	$Units[] = "lbs."; 
	
	$Units[] = "tablespoon"; 
	$Units[] = "T"; 
	$Units[] = "tbl."; 
	$Units[] = "tbs."; 
	$Units[] = "tbsp."; 
	
	$Units[] = "fluid ounce"; 
	$Units[] = "fl oz";
	 
	$Units[] = "gill"; 
	
	$Units[] = "cup"; 
	$Units[] = "c"; 
	$Units[] = "c."; 
	
	$Units[] = "pint"; 
	$Units[] = "p"; 
	$Units[] = "pt"; 
	$Units[] = "fl pt"; 
	$Units[] = ""; 
	
	$Units[] = "quart"; 
	$Units[] = "q"; 
	$Units[] = "qt"; 
	$Units[] = "fl"; 
	$Units[] = "qt";
	 
	$Units[] = "gallon"; 
	$Units[] = "g"; 
	$Units[] = "gal"; 
	
	$Units[] = "ml"; 
	$Units[] = "milliliter"; 
	$Units[] = "millilitre"; 
	$Units[] = "cc"; 
	$Units[] = "mL"; 
	
	$Units[] = "l"; 
	$Units[] = "liter"; 
	$Units[] = "litre"; 
	$Units[] = "L"; 
	
	return $Units;	
}

function generateUniqueFileName() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,8) . '-' . 
        substr($s,8,4) . '-' . 
        substr($s,12,4). '-' . 
        substr($s,16,4). '-' . 
        substr($s,20); 
    return $guidText;
}


?>