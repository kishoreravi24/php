<?php
#function
#=======
function hello()
{
echo "hello";
echo "<br/>";
}
hello();

#function-parameter
#=================
function hello1($name)
{
echo $name;
echo "<br/>";
}
hello1('kishore');

#function with return
#====================
function add($num,$num1)
{
return $num+$num1;
}
echo add(5,6);
echo "<br/>";	


#function with reference
#=======================
$mynum=10;
function five($mynum)
{
$mynum+=5;
}
function ten(&$mynum)
{
$mynum+=10;
}
five($mynum);//normal pass
echo $mynum." ";//here no 10 + 5 actual 10 is print
ten($mynum);//pass with address
echo $mynum." ";//here 10 + 10 actaul 20 is print
?>
