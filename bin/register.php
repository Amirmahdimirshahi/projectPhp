<?php
$host = "localhost";
$dbname = "user";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = isset($_GET['name']) ? $_GET['name'] : '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $pass = $_POST['password'];
        $age = $_POST['age'];

        //$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO users (name, password, age) VALUES (:name, :password, :age)");
        $stmt->execute([
            'name'      => $name,
            'password'  => $pass,
            'age'       => $age
        ]);

        header("Location: http://localhost/project/?excersice=tamrin9");
        exit;
    }
} catch (PDOException $e) {
    echo "خطا در اتصال: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>ثبت‌نام</title>
    <link rel="stylesheet" href="css/Lstyle.css">
</head>

<body>
    <h2>فرم ثبت‌نام</h2>

    <form action="" method="post">
        <label>نام: </label>
        <input type="text" name="name" value="<?= htmlspecialchars($name) ?>" required><br><br>

        <label>رمز: </label>
        <input type="password" name="password" required><br><br>

        <label>سن: </label>
        <input type="number" name="age" required><br><br>

        <input type="submit" value="ثبت‌نام">
    </form>
</body>

</html>