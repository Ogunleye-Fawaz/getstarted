<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=getstarted', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
 

$name = $_POST['name'];
$email = $_POST['email'];
$category = $_POST['category'];
$insert = $pdo->prepare("INSERT INTO users(name, email, category)
                        VALUES(:name, :email, :category)");
$insert->bindValue(':name', $name);
$insert->bindValue(':email', $email);
$insert->bindValue(':category', $category);
$insert->execute();
}
?>