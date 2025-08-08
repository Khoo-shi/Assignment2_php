<?php include "includes/db.php"; include "includes/header.php";
if (!isset($_SESSION['user'])) die("Login required.");
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $n = $_POST['name'];
    $d = $_POST['description'];
    $p = $_POST['price'];
    $conn->query("UPDATE products SET name='$n', description='$d', price='$p' WHERE id=$id");
    echo "Updated.";
}
$res = $conn->query("SELECT * FROM products WHERE id=$id");
$row = $res->fetch_assoc();
?>
<form method="post">
  <input name="name" value="<?= $row['name'] ?>"><br>
  <textarea name="description"><?= $row['description'] ?></textarea><br>
  <input name="price" value="<?= $row['price'] ?>"><br>
  <button type="submit">Update</button>
</form>
<?php include "includes/footer.php"; ?>
