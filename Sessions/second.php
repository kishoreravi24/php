<?php
session_start();
$name=$_SESSION['name'];
$email=$_SESSION['email'];
?>
<html>
<body>
<h1>Thank you <?php echo $name." " ?> and mail is <?php echo $email." " ?></h1>
</body>
</html>
