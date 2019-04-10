<?php
#session
#=======
/*session are used to carry a information or data across pages and session data are stored on server not on computer*/
//for security purpose use htmlentities
if(isset($_POST['name'])&&isset($_POST['email']))
{
session_start();//session start
$_SESSION['name']=htmlentities($_POST['name']);//session['name']=post['name']
$_SESSION['email']=htmlentities($_POST['email']);
header('Location: second.php');
}
else
{
echo "values need to be entered";
}
?>
<html>
<body>
<form method="POST" action="index.php">
Name:<input type="text" name="name">
<br/>
Email:<input type="text" name="email">
<br/>
<input type="submit" value="submit">
</form>
</body>
</html>
