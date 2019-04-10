<?php
#super Global
#===========
$x=5;
$y=6;
function add()
{
$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
add();
echo $z;
echo "<br/>";


#========
#$_SERVER(server)
#========
echo "server Name: "." ".$_SERVER['SERVER_NAME'];
echo "<br/>";
echo "Host Header: "." ".$_SERVER['HTTP_HOST'];
echo "<br/>";
echo "Server Software: "." ".$_SERVER['SERVER_SOFTWARE'];
echo "<br/>";
echo "Document Root: "." ".$_SERVER['DOCUMENT_ROOT'];
echo "<br/>";
echo "Current Page: "." ".$_SERVER['PHP_SELF']; #=> PHP_SELF OR SCRIPT_NAME BOTH SAME
echo "<br/>";
echo "Path: "." ".$_SERVER['SCRIPT_FILENAME'];
echo "<br/>";
#there are more refer php document;

#=======
#$_SERVER(client)
#=======
echo "Client System Info: "." ".$_SERVER['HTTP_USER_AGENT'];
echo "<br/>";
echo "Client IP: "." ".$_SERVER['REMOTE_ADDR'];
echo "<br/>";
echo "Client Port: "." ".$_SERVER['REMOTE_PORT'];
echo "<br/>";
?>
