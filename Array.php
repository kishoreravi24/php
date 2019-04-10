<?php
#Arrays
/*
Indexed
Associated
Multidimensional
*/
#==================
#Index
$people=array('kishore','syed','rudhran');
echo $people[0]." ".$people[1]." ".$people[2];
echo "<br/>";
echo count($people);
echo "<br/>";
print_r($people);#ranging sequence
echo "<br/>";

#====================
#Associated
$cars=array('chevy'=>1999,'lambo'=>1996,'ferrai'=>2000);
echo $cars['ferrai'];
echo "<br/>";
$id=array(1=>'hello',2=>'world');
echo $id[1];

#===================
#Multidimensional
$phones=array(
array('iphone',11,1),
array('samsung',22,2)
);
echo "<br>";
echo $phones[0][0];
echo $phones[0][1];
echo $phones[0][2];
?>
