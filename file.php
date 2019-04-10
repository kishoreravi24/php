<?php
#======================
#=> path='filename'
#=> echo basename($path) prints the file
$file='file2.txt';
echo file_exists($file);
echo "<br/>";
#return dir name
echo dirname($file);
echo "<br/>";
#get abs path
echo realpath($file);
echo "<br/>";
#check if writable
echo is_writable($file);
echo "<br/>";
#check if readable
echo is_readable($file);
echo "<br/>";
#get file size
echo filesize($file);
echo "<br/>";
#======================

#creating
#=====================
#making directory
mkdir('hi');
#remove directory
rmdir('hi');
#copying one file content to another
copy('file1.txt','file2.txt');
#rename
rename('file1.txt','myfile.txt');
#delete file
unlink('myfile.txt');
#put something or append
file_put_contents($myfile,'meow');
#open file for reading
$handle=fopen($file,'r');
#open file for writing
$handle=fopen($file,'w');
#close
fclose($handle);

?>
