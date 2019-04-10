<?php
#-------------------
#Basics
echo "hello world";
echo "<br/>";
$x=5;
echo var_dump($x); #return data type ans:int(5) if $x=6 ans int(6)
echo "<br/>";
echo $x;
#-------------------


#string concadination
$x1="kishore";
$y1="Ravi";
echo $x1." ".$y1;
#or
$z="$x1 $y1";
echo $z;
echo "<br/>";

#define
define('hello','everyone');
echo hello;

#--------------------
#variables,data types and constants
/*
prefix add $ sign
char, number and underscores
case sensitive
starts with letter or underscore others gives error
==============================================
data types
------
string 
$x=" or '
$x='kishore ravi';
-------
Integer
$x=4;
-------
float
$y=4.4;
-------
Boolean
$x=true;
$y=false;
=============================================
*/
?>
