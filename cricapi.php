<?php
 $fileContents= file_get_contents("http://synd.cricbuzz.com/j2me/1.0/livematches.xml");
        $fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
        $fileContents = trim(str_replace('"', "'", $fileContents));
        $simpleXml = simplexml_load_string($fileContents);
        $json = json_encode($simpleXml);
$array = json_decode($json,TRUE);
print_r($array[0]);
?>