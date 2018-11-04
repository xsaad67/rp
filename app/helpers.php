<?php 

if(!function_exists('userLatLon')){

	function userLatLon($ip = null){
		$location = ['longitude'=>'41.8776', 'latitude'=>'-87.6272'];
		$position = Location::get($ip);
		
		if(!is_null($position->latitude)){
			$location['longitude']=$position->longitude;
			$location['latitude']=$position->latitude;
		}
		
		return $location;
	}

}

function containsWord($str, $word)
{
    return !!preg_match('#\\b' . preg_quote($word, '#') . '\\b#i', $str);
}

?>