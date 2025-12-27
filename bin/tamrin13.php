<?php

$name=$_POST['name']??null;
$pass=$_POST['pass']??null;

setcookie('name',$name,time()+3600);
setcookie('pass',$pass,time()+3600);


?>

<form method="POST">
    <input type="text" name="name">
    <input type="text" name="pass">
    <button type="submit">submit</button>
</form>
<p><?php 


echo $_COOKIE["name"]??"";

echo $_COOKIE["pass"]??"";


?></p>