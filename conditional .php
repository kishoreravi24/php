<?php
#conditional and comparison
#==========
/*
< less than
> greater than
>= greater than or equal to
<= less than or equal to
== equal to check the data not data type
eg: $num='5';=>data type char and data is 5
if($num==5)checks data
{
echo $num;
}
=== triplets
eg: $num='5';
if($num==='5')=>checks data and data type
{
echo $num;
}
*/

$num=5;
if($num>4)
{
echo $num;
}
else
{
echo $num." not correct";
}

# same like above for all operator like &&,||

#switch
#======
$str='red';
switch($str)
{
case 'red':
	echo $str;
	break;
case 'green':
	echo $str;
	break;
case 'blue':
	echo $str;
	break;
default:
	echo "nothing is correct";
	break;
}

?>
