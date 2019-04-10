<?php
#string functions
#================
#substr
$output=substr('Hello',1);
echo $output;
echo "<br/>";
/*cuts the h and prints ello*/

#================
#strlen
echo strlen('hello');
echo "<br/>";
//prints the string length

#==============
#strpos
echo strpos('hello','e');
echo "<br/>";
//position of e


#=============
#trim
$text="kishore ravi     e";
echo trim($text);
echo "<br/>";
//remove whitespaces

#=============
#strtoupper & strtolower
$str="HELLO";
$str1="hello";
echo strtoupper($str1);
echo "<br/>";
echo strtolower($str);

#===========
#UCwords captilize every word from starting and after space
$out=ucwords('hello world');
echo $out;
echo "<br/>";

#==========
#str-replace
$t1="hello world";
$t3=str_replace("world","everyone",$t1);
echo $t3;

#===========
#check the val is string or not
$val='22';
$o1=is_string($val);
echo $o1; #=> if 1 is true nothing prints the value is not string
echo "<br/>";

#===========
#Important thing||
#change paragraph to bash?(compressing)
$string="
What is Lorem Ipsum?

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
";

$compress=gzcompress($string);
echo $compress;
echo "<br>";
echo "<br/>";
$compress1=gzuncompress($compress);
echo $compress1;
?>
