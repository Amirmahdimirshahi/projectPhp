<?php
$exercises = [
    [
        'title' => 'تمرین یک',
        'link' => 'bin/tamrin1.php',
        'description' => 'این صفحه مربوط به تمرین شماره ۱ است.'
    ],
    [
        'title' => 'تمرین دو',
        'link' => 'bin/tamrin2.php',
        'description' => 'این صفحه مربوط به تمرین شماره ۲ است.'
    ],
    [
        'title' => 'تمرین سه',
        'link' => 'bin/tamrin3.php',
        'description' => 'این صفحه مربوط به تمرین شماره ۳ است.'
    ]
];
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>نمایش تمرین‌ها</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/style4.css">
</head>

<body>

    <div class="content">
        <h1>لیست تمرین‌ها</h1>


        <table>
            <thead>
                <tr>
                    <th>عنوان تمرین</th>
                    <th>لینک</th>
                    <th>توضیحات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($exercises as $exercise) {
                    echo "<tr>
                            <td>{$exercise['title']}</td>
                            <td><a href='{$exercise['link']}'>مشاهده تمرین</a></td>
                            <td>{$exercise['description']}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
