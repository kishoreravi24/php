<?php
#cookies
#=======
#session that stores on server and cookies data is stored on your browser
if(isset($_POST['name']))
{
	$username=htmlentities($_POST['name']);
	setcookie('username',$username,time()+3600);#=>time is for available for cookie 3600 is 1 hr tie for cookie.
	header('Location: page2.php');
}
else
{
echo "Enter the data";
}
?>
<html>
<body>
<form method="POST" action="index.php">
Name:<input type="text" name="name">
<br/>
<input type="submit" value="submit">
</form>
</body>
</html>
