<?php include "includes/db.php"; include "includes/header.php";
$res = $conn->query("SELECT * FROM products");
while($row = $res->fetch_assoc()): ?>
  <div>
    <h2><?= $row['name'] ?></h2>
    <p><?= $row['description'] ?></p>
    <p>$<?= $row['price'] ?></p>
    <?php if ($row['image']): ?>
      <img src="<?= $row['image'] ?>" width="150">
    <?php endif; ?>
    <?php if (isset($_SESSION['user'])): ?>
      <a href="update.php?id=<?= $row['id'] ?>">Edit</a> |
      <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
    <?php endif; ?>
  </div><hr>
<?php endwhile;
include "includes/footer.php"; ?>
