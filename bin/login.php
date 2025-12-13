<?php
session_start();

$host = "localhost";
$dbname = "user";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = $_POST['name'];
        $pass = $_POST['password'];

        $stmt = $pdo->prepare("SELECT * FROM users WHERE name = :name");
        $stmt->execute(['name' => $name]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            header("Location: register.php?name=" . urlencode($name));
            exit;
        }

        $block_time = 10;

        if ($user['login_attempts'] >= 3) {
            $last = strtotime($user['last_attempt']);

            if ((time() - $last) < $block_time) {
                $remaining = $block_time - (time() - $last);
                echo "<p style='color:red'>حساب شما بلاک شده است. لطفاً $remaining ثانیه دیگر تلاش کنید.</p>";
                exit;
            } else {
                $pdo->prepare("UPDATE users SET login_attempts = 0 WHERE id = :id")
                    ->execute(['id' => $user['id']]);
                $user['login_attempts'] = 0;
            }
        }

        if ($pass === $user['password']) {

            $_SESSION['user'] = $user['name'];

            $pdo->prepare("UPDATE users SET login_attempts = login_attempts + 1, last_attempt = NOW() WHERE id = :id")
                ->execute(['id' => $user['id']]);

            header("Location: success.php?name=" . urlencode($user['name']));
            exit;
        } else {

            $pdo->prepare("
                UPDATE users SET login_attempts = login_attempts + 1, last_attempt = NOW() 
                WHERE id = :id
            ")->execute(['id' => $user['id']]);

            $remaining = 3 - ($user['login_attempts'] + 1);

            if ($remaining > 0) {
                echo "<p style='color:red'>رمز اشتباه است! $remaining تلاش باقی مانده.</p>";
            } else {
                echo "<p style='color:red'>۳ بار رمز اشتباه وارد شد. حساب شما موقتاً بلاک شد.</p>";
            }
        }
    }
} catch (PDOException $e) {
    echo "خطا در اتصال: " . $e->getMessage();
}
