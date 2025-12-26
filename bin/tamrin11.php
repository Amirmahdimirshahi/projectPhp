<h2> File Manager</h2>
<?php
$uploadDir = __DIR__ . "/../uploads";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if (isset($_GET['delete'])) {
    $file = basename($_GET['delete']);
    if (file_exists($uploadDir . '/' . $file)) {
        unlink($uploadDir . '/' . $file);
    }
    header("Location: ?excersice=tamrin11");
    exit;
}

if (isset($_POST['create'])) {
    $filename = basename($_POST['filename']);
    $content = $_POST['content'] ?? '';
    file_put_contents($uploadDir . '/' . $filename, $content);
    header("Location: ?excersice=tamrin11");
    exit;
}

if (isset($_FILES['file'])) {
    $fileName = basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadDir . '/' . $fileName);
    header("Location: ?excersice=tamrin11");
    exit;
}

$files = scandir($uploadDir);
?>

<hr>
<h3>ایجاد فایل جدید</h3>
<form action="?excersice=tamrin11" method="post">
    <input type="text" name="filename" placeholder="example.txt" required><br><br>
    <textarea name="content" placeholder="متن فایل"></textarea><br><br>
    <button name="create">ایجاد فایل</button>
</form>

<hr>
<h3>آپلود فایل </h3>
<form action="?excersice=tamrin11" method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button>آپلود فایل</button>
</form>

<hr>
<h3>فایل‌های موجود</h3>
<ul>
    <?php
    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            echo "<li>
                $file |
                <a href='uploads/$file' target='_blank'>نمایش</a> |
                <a href='?excersice=tamrin11&delete=$file'>حذف</a>
              </li>";
        }
    }
    ?>
</ul>