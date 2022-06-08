<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP - POO</title>
</head>
<body>
    <h1>Exercício 1</h1>
<?php
require_once "src/Livro.php";
$livro = new Livro;
$livro2 = new Livro;

$livro->setTitulo("A casa de papel");
$livro->setAutor("Joaquim.M.Neto");
$livro->setPaginas(85);

$livro2->setTitulo("Rua sem saida");
$livro2->setAutor("M.Neto Filho");
$livro2->setPaginas(350);
?>
<h3><?=$livro->getTitulo()?></h3>
<h3><?=$livro->getAutor()?></h3>
<h3><?=$livro->getPaginas()?></h3>
<hr>
<h3><?=$livro2->getTitulo()?></h3>
<h3><?=$livro2->getAutor()?></h3>
<h3><?=$livro2->getPaginas()?></h3>
</body>
</html>