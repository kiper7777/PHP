<?php
echo "welcome to php cookies";

$name="John";
setcookie("username",$name,time()+ 60,"/");
echo("coockies is set");

echo $_COOKIE['username'];

?>