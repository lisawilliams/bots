<?php
$page_title = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($file_download) ?></title>
</head>
<body>

<?php // Script number 3.3 , filename file_download.php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Download the target file

$target = "http://www.WebbotsSpidersScreenScrapers.com/hello_world.html";

$downloaded_page_array = file($target); 

// Echo contents of file
for($xx=0; $xx<count($downloaded_page_array); $xx++)
	echo $downloaded_page_array[$xx];
	

?>

</body>
</html>