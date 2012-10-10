<html>
<head>
</head>
<body>
<?php
include("includes/LIB_parse.php");   # Include parse library
include("includes/LIB_http.php");    # Include cURL library

$web_page = http_get($target="http://www.nytimes.com", $referer="");

$meta_tag_array = parse_array($web_page['FILE'], "<img", ">");

for($xx=0; $xx<count($meta_tag_array); $xx++)
	{
		$name = get_attribute($meta_tag_array[$xx], $attribute="src");
		
    	echo "<img src='$name'></br>";
    }
?>
</body>
</html>