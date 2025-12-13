<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شهرهای بزرگ امریکا</title>
    <link rel="stylesheet" href="css/style3.css">
</head>
<body>

<h3>آرایه شهرهای بزرگ امریکا</h3>

<table>
    <tr>
        <th>نام شهر</th>
        <th>جمعیت</th>
    </tr>
    <?php

    $cities = array(
        "New York" => 81111111,
        "Chicago" => 3776777777,
        "Los Angeles" => 3792621,
        "Houston" => 2129784,
        "Phoenix" => 1660272,
        "Philadelphia" => 1584201,
        "San Antonio" => 1547253,
        "San Diego" => 1425976,
        "Dallas" => 1341075,
        "San Jose" => 1021795
    );


    foreach($cities as $city => $population) {
        echo "<tr><td>$city</td><td>" . number_format($population) . "</td></tr>";
    }
    ?>
</table>

<?php

$cities_by_population = $cities;
arsort($cities_by_population);
?>

<h3>شهرها بر اساس جمعیت</h3>

<table>
    <thead>
        <tr>
            <th>نام شهر</th>
            <th>جمعیت</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cities_by_population as $city => $population): ?>
            <tr>
                <td><?php echo $city; ?></td>
                <td><?php echo number_format($population); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php

$cities_by_name = $cities;
ksort($cities_by_name);
?>

<h3>مرتب‌سازی بر اساس نام شهر</h3>

<table>
    <thead>
        <tr>
            <th>نام شهر</th>
            <th>جمعیت</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cities_by_name as $city => $population): ?>
            <tr>
                <td><?php echo $city; ?></td>
                <td><?php echo number_format($population); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php

$total_population = array_sum($cities);
?>

<div class="population-section">
    <h3>مجموع کل جمعیت شهرها</h3>
    <p>
        مجموع کل جمعیت شهرها: <?php echo number_format($total_population); ?>
    </p>
</div>

</body>
</html>
