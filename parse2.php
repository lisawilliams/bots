<?php

include("LIB_parse.php"); # Include parse library 
include("LIB_http.php"); # Include PHP/ CURL library 

// Download the web page 
$web_page = http_get($target =" http:// www.nytimes.com", $referer ="");

// Parse the image tags
$meta_tag_array = parse_array($web_page['FILE'], "<img", ">"); 

// Echo the image source attribute from each image tag 

for($xx = 0; $xx < count($meta_tag_array); $xx ++) 

	{ $name = get_attribute($meta_tag_array[$xx], $attribute ="src"); 
	
			echo $name ."\n";
	}
	
?>		

