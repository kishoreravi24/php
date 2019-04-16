<?php
$xml=simplexml_load_file("data.xml");
echo $xml->data[0]->title;
?>
