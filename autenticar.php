<?php
session_start();

include_once('./class/Database.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$db = Database::conexao();
$sql = "SELECT email FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$autenticar = $db->query($sql)->fetch(PDO::FETCH_ASSOC);

if ($autenticar) {
  $_SESSION['autenticado'] = 'true';
  header('Location: home.php');
} else {
  $_SESSION['autenticado'] = 'false';
  header('Location: index.php');
}
