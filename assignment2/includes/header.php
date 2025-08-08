<!DOCTYPE html>
<html>
<head>
  <title>Product System</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <h1>Product Manager</h1>
  <nav>
    <a href="index.php">Home</a> |
    <a href="create.php">Add Product</a> |
    <?php if (isset($_SESSION['user'])): ?>
      <a href="logout.php">Logout</a>
    <?php else: ?>
      <a href="login.php">Login</a>
    <?php endif; ?>
  </nav>
</header>
<hr>
