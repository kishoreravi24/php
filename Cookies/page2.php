<?php
if(isset($_COOKIE['username']))
{
echo $_COOKIE['username'];
}
else
{
echo "cookie not available";
}
/*press ctrl+shift+k then go to storage click cookies and see the cookie name and value and time is 1 hr for that.*/
?>
