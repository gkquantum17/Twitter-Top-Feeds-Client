<?php
	
	session_start(); 
	
	require_once("twitteroauth/twitteroauth.php");
	
	$apikey="I9H47mPvIJt7sugM2JORh8nj9";
	$apisecret="4UyiF3xLIiBzV7V9FVUx0CRuHXem4ARmbBmChmysflIUdlAWSO";
	$accesstoken="1043357040-L2Qwrc9wAt07qKoMY4g9laajhflkzSw5OB5RN1m";
	$accesssecret="wsDL4nCVf4jCOqmRhqh6uVlwIb0fQ0QhWmCYf7WrAvzND";
	
	$connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret); 
	
		$response = $connection->get("https://api.twitter.com/1.1/statuses/home_timeline.json?count=200");
	
	foreach ($response as $tweet){
	
	$favorites = $tweet->favorite_count; 
		if ($favorites >= 2){
			$embed = $connection->get("https://api.twitter.com/1.1/statuses/oembed.json?id=".$tweet->id);
			
			echo $embed->html;
		}
	}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

?>