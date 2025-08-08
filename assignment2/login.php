<?php include "includes/db.php"; include "includes/header.php"; 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $u = $_POST['username'];
    $p = $_POST['password'];
    $res = $conn->query("SELECT * FROM users WHERE username='$u'");
    $user = $res->fetch_assoc();
    if ($user && password_verify($p, $user['password'])) {
        $_SESSION['user'] = $user['id'];
        header("Location: index.php");
    } else echo "Invalid login";
}
?>
<form method="post">
  <input name="username" required placeholder="Username"><br>
  <input name="password" type="password" required placeholder="Password"><br>
  <button type="submit">Login</button>
</form>
<a href="register.php">Register</a>
<?php include "includes/footer.php"; ?>
