<html>
<body>
<h1>Get method</h1>
<form method="GET" action="index.php">
Name:<input type="text" name="name">
<br/>
Email:<input type="text" name="email">
<br/>
<input type="submit" value="submit">
</form>
<!--
GET method not have good security
it display the name and other contents on the url
it send data through url to server
you cant send images and videos to the server using GET method
-->
<?php
if(isset($_GET['name'])&&isset($_GET['email'])) #=>isset means the $_GET['name'] have a val or not.
{
echo $_GET['name'];
echo "<br/>";
echo $_GET['email'];
}
?>
</body>
</html>
