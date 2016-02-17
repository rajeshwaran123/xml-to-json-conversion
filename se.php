<?php

function XMLtoJSON($xml) {
  $xml_cnt = file_get_contents($xml);    
  $xml_cnt = str_replace(array("\n", "\r", "\t"), '', $xml_cnt);   
 
  $xml_cnt = trim(str_replace('"', "'", $xml_cnt));
  $simpleXml = simplexml_load_string($xml_cnt);

  return json_encode($simpleXml);  
}

echo XMLtoJSON('images/example.xml');   
?>

