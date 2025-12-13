<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>login / register</title>
    <link rel="stylesheet" href="css/Lstyle.css">

</head>

<body>
    <h2>فرم ورود</h2>

    <form action="bin/login.php" method="post" autocomplete="off" form>
        <label>نام:</label>
        <input type="text" name="name" required autocomplete="off"><br><br>

        <label>رمز عبور:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="ورود">
    </form>

</body>

</html>