<?php

require_once 'class/Database.php';

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

echo $titulo . '<br>' . $categoria  . '<br>' . $descricao;

$bd = Database::conexao();
$sql = "INSERT INTO chamados(titulo, categoria, descricao) VALUES('$titulo', $categoria, '$descricao')";

if ($bd->prepare($sql)->execute())
  header('Location: abrir_chamado.php');
else
  header('Location: abrir_chamado.php?error');
