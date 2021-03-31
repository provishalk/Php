<?php   
//Define the main string
$mainstr = "#This is a sim'ple =% ()*[]{}+-:;<>,? text;";
//The output before remove
echo "<b>Text before remove: </b> <br/>".$mainstr;
//Call the function
$pattern = "/#|\'|=|%|&|\*|\(|\)|-|\+|\{|\}|\[|\]|:|;|\"|<|>|,|\?|/i";
echo "<br><b>Text After remove: </b> <br/>".preg_replace($pattern, "", $mainstr);
?>