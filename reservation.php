<!DOCTYPE html>
<html>
<head>
  <title>Reservation</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<h2>Reserve a Table</h2>

<form action="submit-reservation.php" method="POST">
  <input type="text" name="name" placeholder="Your Name" required>
  <input type="email" name="email" placeholder="Your Email" required>
  <input type="text" name="phone" placeholder="Phone" required>
  <input type="date" name="reservation_date" required>
  <input type="time" name="reservation_time" required>
  <input type="number" name="guests" placeholder="Guests" required>
  <textarea name="message" placeholder="Message"></textarea>
  <button type="submit">Reserve</button>
</form>

</body>
<nav class="navbar">
  <a href="index.php">Home</a>
  <a href="menu.php">Menu</a>
  <a href="reservation.php">Reservation</a>
  <a href="contact.php">Contact</a>
</nav>

</html>
