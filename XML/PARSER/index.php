<?php
$xmldata=
"<?xml version='1.0' encoding='UTF-8'?>
<document>
<user>kishore</user>
<enail>kishore@mail.com</email>
</document>";
$xml=simplexml_load_string($xmldata);
if($xml==false)
{
echo "Sorry not Found!";
}
else
{
print_r($xml);
}
?>
