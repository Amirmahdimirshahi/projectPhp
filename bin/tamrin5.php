<?php

function calculate($num1, $num2, $operator) {
    
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num1 / $num2;
    }
}

$calculation_output = '';
$num1_display = '';
$num2_display = '';
$operator_display = '+';
$result = null; 

if (isset($_POST['calculate'])) {

    $num1 = $_POST['num1']; 
    $num2 = $_POST['num2']; 
    $operator = $_POST['operator'];

    $num1_display = $num1;
    $num2_display = $num2;
    $operator_display = $operator;

    $result = calculate($num1, $num2, $operator);

    if ($result !== null) {
        $calculation_output = "$num1_display $operator $num2_display = " . $result;
    }
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تمرین ۵: ماشین حساب PHP ساده</title>
    </head>
<body>

<div class="container">
    <div class="content">
        <h1> ماشین حساب </h1>

        <div class="exercise-box">
            <form class="calculator-form" method="POST">
                
                <input type="text" name="num1" placeholder="عدد اول" required 
                       value="<?php echo htmlspecialchars($num1_display); ?>" style="width: 150px;">
                
                <select name="operator">
                    <option value="+" <?php if ($operator_display == '+') echo 'selected'; ?>>+</option>
                    <option value="-" <?php if ($operator_display == '-') echo 'selected'; ?>>-</option>
                    <option value="*" <?php if ($operator_display == '*') echo 'selected'; ?>>*</option>
                    <option value="/" <?php if ($operator_display == '/') echo 'selected'; ?>>/</option>
                </select>
                
                <input type="text" name="num2" placeholder="عدد دوم" required 
                       value="<?php echo htmlspecialchars($num2_display); ?>" style="width: 150px;">
                
                <button type="submit" name="calculate">محاسبه</button>
            </form>

            <?php if ($calculation_output): ?>
                     <?php echo $calculation_output; ?>
                </div>
            <?php endif; ?>
            
            <h3 style="margin-top: 30px; color: #5c9f9e;">کد PHP تابع (منطق محاسبات):</h3>
            <pre>
function calculate($num1, $num2, $operator) {
    switch ($operator) {
        case '+': return $num1 + $num2;
        case '-': return $num1 - $num2;
        case '*': return $num1 * $num2;
        case '/': return $num1 / $num2;
    }
}
            </pre>
        </div>
    </div>
</div>

</body>
</html>