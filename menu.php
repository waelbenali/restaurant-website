<?php require "db_config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<h2>Menu</h2>
<div class="menu-grid">
<?php
$res = $conn->query("SELECT * FROM menu_items WHERE available=1");
while($row=$res->fetch_assoc()):
?>
<div class="menu-card">
  <img src="assets/images/<?= $row['image'] ?>">
  <h3><?= $row['name'] ?></h3>
  <p><?= $row['description'] ?></p>
  <strong>$<?= $row['price'] ?></strong>
</div>
<?php endwhile; ?>
</div>

</body>
<nav class="navbar">
  <a href="index.php">Home</a>
  <a href="menu.php">Menu</a>
  <a href="reservation.php">Reservation</a>
  <a href="contact.php">Contact</a>
</nav>

</html>
