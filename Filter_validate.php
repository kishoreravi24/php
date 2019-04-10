<?php
if(isset($_POST['fname']))
{
	if(filter_var($_POST['fname'],FILTER_VALIDATE_EMAIL))
	{
		echo $_POST['fname']." "."is valid";
	}
	else
	{
		echo $_POST['fname']." "."is not valid";
	}
}
else
{
echo "Nil";
}
?>
<html>
<body>
<form action="index.php" method="POST">
Name:<input type="text" name="fname">
<input type="submit" value="submit">
</form>
</body>
</html>
