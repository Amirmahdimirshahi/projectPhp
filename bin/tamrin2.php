<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Examples</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>

<div>
    <h3 class="question">سوال 1: نتیجه کد زیر چیست؟</h3>
    <div class="code">
        <?php
        $x= 10;
        $message="sddddd";
        if($x++ > 10 && $x < 12) {
            $message = "Message A.";
        } else {
            $message = "Message B";
        }
        ?>
    </div>
    <p class="output">نتیجه: <?php echo $message; ?></p>
</div>


<div>
    <h3 class="question">سوال 2: با استفاده از یک حلقه for، جدولی از اعداد 1 تا 5 و مربع‌های آن‌ها ایجاد کنید.</h3>
    <div class="code">
        <?php
        echo "for (\$i = 1; \$i <= 5; \$i++) { <br>";
        echo "    \$square = \$i * \$i; <br>";
        echo "    echo \"<tr><td>\$i</td><td>\$square</td></tr>\"; <br>";
        echo "} <br><br>";
        ?>
    </div>
    <p class="output">جدول اعداد و مربع‌ها:</p>
    <table>
        <tr>
            <th>عدد</th>
            <th>مربع</th>
        </tr>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            $square = $i * $i;
            echo "<tr><td>$i</td><td>$square</td></tr>";
        }
        ?>
    </table>
</div>

<div>
    <h3 class="question">سوال 3: تبدیل دما از فارنهایت به سلسیوس برای دماهای -50 تا 50 با گام 5.</h3>
    <div class="code">
        <?php
        echo "\$f = -50; <br>";
        echo "while (\$f <= 50) { <br>";
        echo "    \$c = (5/9)*(\$f - 32); <br>";
        echo "    echo \"fahrenheit : \$f -> Celsius :\" . round(\$c, 3); <br>";
        echo "    \$f += 5; <br>";
        echo "} <br><br>";
        ?>
    </div>
    <p class="output">نتایج تبدیل دما:</p>
    <table>
        <tr>
            <th>فارنهایت</th>
            <th>سلسیوس</th>
        </tr>
        <?php
        $f = -50;
        while ($f <= 50) {
            $c = (5/9) * ($f - 32);
            echo "<tr><td>$f</td><td>" . round($c, 3) . "</td></tr>";
            $f += 5;
        }
        ?>
    </table>
</div>

</body>
</html>
