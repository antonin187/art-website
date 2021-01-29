<?php
if (isset($_POST['submit'])) {
$thename = $_POST['nom'];
$sender = $_POST['email'];
$subject = $_POST['Objet'];
$message = $_POST['message'];
$submit = $_POST['submit'];

$recipient = 'antoninèsimon@gmail.com';
$headers = "De la part de : ".$sender;
$txt = "Vous avez reçu un email de ".$thename.".\n\n\n".$message;

mail($recipient, $subject, $txt, $headers);
//header("Location :  index.php?mailsend");
}
