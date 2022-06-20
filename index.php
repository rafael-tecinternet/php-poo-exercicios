<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP - POO</title> 
</head>
<body>
    <h1>Exercício 4</h1>
<?php
require_once "vendor/autoload.php";
// Usando as classes a partir de um namespace comum.
$livro = new  Src\Tecnico;
$livroB = new Src\Programacao;
$livroC = new Src\Didatico;
$livroWeb = new Src\Web;

$livro->setTitulo("A casa de papel");
$livro->setAutor("Joaquim.M.Neto");
$livro->setPaginas(85);
$livro->setFormato(['digital']);

$livroB->setTitulo("Digital web");
$livroB->setAutor("Joaquim.M.Neto");
$livroB->setPaginas(350);
$livroB->setFormato(['fisico']);
$livroB->setArea("Web");

$livroC->setTitulo("Aplicando numeros");
$livroC->setAutor("Monqui.D.Lugy");
$livroC->setPaginas(1000);
$livroC->setFormato(['digital']);
$livroC->setNivel(['médio']);
$livroC->setDisciplina("Matemática");


?>
<pre><?=var_dump($livro, $livroB, $livroC)?></pre>

</body>
</html>