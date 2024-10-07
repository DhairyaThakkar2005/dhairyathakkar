<?php
$uname=$_POST['uname'];
$pass=$_POST['pass'];

setcookie("a1",$uname);
include "header.html";

echo "current user name is : ".$uname;
echo "<br>";
echo "password is : ".$pass;
echo "<br>";

if(!isset($_COOKIE['a1']))
{
    echo "No cookies found";
}

else
{
    echo "<br>Cookies value is : ".$_COOKIE['a1'];
}

include "footer.html";
?>