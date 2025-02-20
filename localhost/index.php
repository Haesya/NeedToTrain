<?php
$fio = $_POST['fio'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$fio = trim($fio);
$phone = trim($phone);
$email = trim($email);

echo $fio;
echo "<br>";
echo $phone;
echo "<br>";
echo $email;
?>