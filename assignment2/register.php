<?php include "includes/db.php"; include "includes/header.php"; 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $u = $_POST['username'];
    $p = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $conn->query("INSERT INTO users (username, password) VALUES ('$u', '$p')");
    echo "User registered. <a href='login.php'>Login</a>";
}
?>
<form method="post">
  <input name="username" required placeholder="Username"><br>
  <input name="password" type="password" required placeholder="Password"><br>
  <button type="submit">Register</button>
</form>
<?php include "includes/footer.php"; ?>
