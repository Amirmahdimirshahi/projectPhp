<?php
$conn = new mysqli("localhost", "root", "", "people");
if ($conn->connect_error) die("اتصال برقرار نشد: " . $conn->connect_error);

if (isset($_POST['import_csv'])) {
    $file = $_FILES['csv_file']['tmp_name'];
    if (($handle = fopen($file, "r")) !== false) {
        fgetcsv($handle); 
        while (($row = fgetcsv($handle)) !== false) {
            list($id, $name, $email) = $row;
            $check = $conn->query("SELECT * FROM people WHERE id='$id' OR email='$email'");
            if ($check->num_rows == 0) {
                $conn->query("INSERT INTO people (id, name, email) VALUES ('$id', '$name', '$email')");
            } else {
                echo "<p style='color:red'>ID یا Email $id/$email تکراری است</p>";
            }
        }
        fclose($handle);
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $check = $conn->query("SELECT * FROM people WHERE email='$email' AND id<>$id");
    if ($check->num_rows == 0) {
        $conn->query("UPDATE people SET name='$name', email='$email' WHERE id=$id");
        header("Location: ".$_SERVER['PHP_SELF']);
    } else {
        echo "<p style='color:red'>Email تکراری است!</p>";
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM people WHERE id=$id");
    header("Location: ".$_SERVER['PHP_SELF']);
}

$result = $conn->query("SELECT * FROM people ORDER BY id ASC");
?>

<h2>مدیریت کاربران با CSV ساده</h2>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="csv_file" accept=".csv" required>
    <button type="submit" name="import_csv">اضافه کردن از CSV</button>
</form>

<table border="1" cellpadding="5">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>عملیات</th></tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td>
            <a href="?edit=<?= $row['id'] ?>">ویرایش</a> |
            <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('مطمئنی؟')">حذف</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<?php
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $row = $conn->query("SELECT * FROM people WHERE id=$id")->fetch_assoc();
    ?>
    <h3>ویرایش رکورد ID <?= $row['id'] ?></h3>
    <form method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="text" name="name" value="<?= $row['name'] ?>" required>
        <input type="email" name="email" value="<?= $row['email'] ?>" required>
        <button type="submit" name="update">به‌روزرسانی</button>
    </form>
<?php } ?>