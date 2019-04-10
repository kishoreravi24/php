<html>
<body>
<h1>Post method</h1>
<form method="POST" action="index.php">
Name:<input type="text" name="name">
<br/>
Email:<input type="text" name="email">
<br/>
<input type="submit" value="submit">
</form>
<!--
POST method have good security
you can send images and videos through the post method
POST method send data to server through HTTP HEADERS.
-->
<?php
if(isset($_POST['name'])&&isset($_POST['email'])) #=>isset means the $_GET['name'] have a val or not.
{
echo $_POST['name'];
echo "<br/>";
echo $_POST['email'];
}
?>
</body>
</html>
