<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>ورود موفق</title>
</head>

<body>

    <h2 style="color:green;">شما با موفقیت وارد شدید</h2>

    <?php
    $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
    if ($name) {
        echo "<p>خوش آمدی، <strong>$name</strong></p>";
    }
    ?>

    <br><br>

    <a href="http://localhost/project/?excersice=tamrin9" style="font-size:18px; color:blue;">
        بازگشت به فرم ورود
    </a>

</body>

</html>