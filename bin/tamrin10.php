<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

if($email !=false){
    echo 'emil khob';
    
}else{
    echo 'no emil khob';
}
}
?>
<form action="" method="post" autocomplete="off" form>
        <label>نام:</label>
        <input type="text" name="name" required autocomplete="off"><br><br>

        <label>ایمیل:</label>
        <input type="text" name="email" required placeholder="e@gmail.com"><br><br>

        <input type="submit" value="ورود">
    </form>