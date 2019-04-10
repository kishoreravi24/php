<?php
#loops
#==========
/*
for
while
do-while
for each
*/


#for
#===
for($i=0;$i<10;$i++)
{
echo $i." ";
}
echo "<br/>";


#while
#=====
$i=0;
while($i<10)
{
echo $i." ";
$i++;
}
echo "<br/>";


#do-while
#========
$i=0;
do
{
echo $i." ";
$i++;
}while($i<10);
echo "<br/>";



#for-each
#========
$people=array('kishore','ravi','william');
foreach($people as $person){
	echo $person." ";
}

?>
