<?php
#date
#====
echo date('Y/m/d'); #=>year/month/date
echo "<br/>";
#====
echo date('h'); #=>hour
echo "<br/>";
echo date('i'); #=>min
echo "<br/>";
echo date('s'); #=>sec
echo "<br/>";
echo date('a'); #=>Am or Pm
echo "<br/>";

#====
#America
date_default_timezone_set('America/New_York');
echo date('h:i:s:a');
echo "<br/>";

#Newzeland
date_default_timezone_set('NZ');
echo date('h:i:s:a');
echo "<br/>";

#======
#timestamp
#=========
$timestamp=mktime(05,14,9,03,24,1999); #=>hour,min,sec month,day,year
echo $timestamp; #or
echo "<br/>";
echo date('h:i:s:a...m/d/y',$timestamp);
echo "<br/>";

#=====
#strtotime
#========
$timestamp2=strtotime('7:00pm March 24 1999');
echo $timestamp2;
echo "<br/>";
echo date('h:i:s:a...m/d/y',$timestamp2);	
?>
