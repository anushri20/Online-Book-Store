<?php
$user=$_POST['un'];
$pass=$_POST['pass'];
<$result=QUERY;
//select * from users where username='$user' AND password='$pass';
if($result IS NOT BLANK)
{
	echo "login success";
}
else
{
	echo "login failed";
}
?>