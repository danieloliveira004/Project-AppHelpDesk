<?php
require_once 'class/Database.php';

$id = $_GET['id'];

$bd = Database::conexao();
$sql = "DELETE FROM chamados WHERE id = $id";
$bd->prepare($sql)->execute();

header("Location: consultar_chamado.php");
