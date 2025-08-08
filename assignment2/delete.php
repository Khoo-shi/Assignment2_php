<?php include "includes/db.php";
if (!isset($_SESSION['user'])) die("Login required.");
$id = $_GET['id'];
$conn->query("DELETE FROM products WHERE id=$id");
header("Location: index.php");
