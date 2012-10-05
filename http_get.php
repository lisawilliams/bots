<?php
$page_title = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script number , filename

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Include http library
include("LIB_http.php");

// Define the target and referrer web pages: 
$target ="http://www.schrenk.com/publications.php";
$ref = "http://www.schrenk.com";

// Request the header
$return_array = http_get_witheader($target, $ref);

// Display the header: 
echo "FILE CONTENTS \n";
var_dump($return_array['FILE']);
echo "ERRORS\n";
var_dump($return_array['ERROR']);

echo "STATUS \n";
var_dump($return_array['STATUS']);


?>

</body>
</html>