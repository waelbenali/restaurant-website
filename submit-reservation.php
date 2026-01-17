<?php
require "db_config.php";

$stmt=$conn->prepare(
"INSERT INTO reservations
(name,email,phone,reservation_date,reservation_time,guests,message)
VALUES(?,?,?,?,?,?,?)"
);

$stmt->bind_param("sssssis",
$_POST['name'],$_POST['email'],$_POST['phone'],
$_POST['reservation_date'],$_POST['reservation_time'],
$_POST['guests'],$_POST['message']
);

$stmt->execute();
header("Location: reservation.php?success=1");
