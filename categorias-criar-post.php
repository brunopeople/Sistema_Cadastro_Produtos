<?php

try{
require_once 'global.php';

$categoria = new Categoria();
$nome = $_POST['nome'];
$categoria->nome = $nome;
$categoria->inserirCategoria($nome);

header('Location:categorias.php');

}catch(Exception $e){
	Erro::trataErro($e);
}