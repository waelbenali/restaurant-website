<?php
session_start();
require "../db_config.php";

if(!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="admin-bg">

<div class="dashboard">
  <h2>Admin Dashboard</h2>
  <a class="logout" href="logout.php">Logout</a>

  <h3>Reservations</h3>
  <?php
  $res = $conn->query("SELECT * FROM reservations ORDER BY created_at DESC");
  while($r = $res->fetch_assoc()):
  ?>
  <div class="card">
    <p>
      <strong><?= $r['name'] ?></strong><br>
      <?= $r['reservation_date'] ?> at <?= $r['reservation_time'] ?><br>
      Guests: <?= $r['guests'] ?><br>
      Status: <?= $r['status'] ?>
    </p>
  </div>
  <?php endwhile; ?>

  <h3>Contact Messages</h3>
  <?php
  $msg = $conn->query("SELECT * FROM contacts ORDER BY created_at DESC");
  while($m = $msg->fetch_assoc()):
  ?>
  <div class="card">
    <p>
      <strong><?= $m['name'] ?></strong> (<?= $m['email'] ?>)<br>
      <?= $m['message'] ?>
    </p>
  </div>
  <?php endwhile; ?>
</div>

</body>
</html>
