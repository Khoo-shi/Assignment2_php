<?php include "includes/db.php"; include "includes/header.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $n = $_POST['name'];
    $d = $_POST['description'];
    $p = $_POST['price'];
    $img = "";
    if ($_FILES['image']['name']) {
        $img = "uploads/" . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $img);
    }
    $conn->query("INSERT INTO products (name, description, price, image) VALUES ('$n', '$d', '$p', '$img')");
    echo "Product added.";
}
?>
<form method="post" enctype="multipart/form-data">
  <input name="name" required placeholder="Product Name"><br>
  <textarea name="description" placeholder="Description"></textarea><br>
  <input name="price" type="number" step="0.01" required placeholder="Price"><br>
  <input name="image" type="file"><br>
  <button type="submit">Add Product</button>
</form>
<?php include "includes/footer.php"; ?>
