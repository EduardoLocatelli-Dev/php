<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("config.php");

//carrega um usuario
//$root = new Usuario();

//$root->loadbyId(3);

//echo $root;

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//para funcionar substitui query por select
echo json_encode($usuarios);*/

//carrega uma lista de usuarios
//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login 
//$search = Usuario::search("fe");

//echo json_encode($search);

//carrega um usuario usando o login e a senha 
//$usuario = new Usuario();
//$usuario->login("feijão","!@#$%3123");

//echo $usuario;
/*
//criando um novo usuario
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;
*/
//Alterar um usuario
/*$usuario = new Usuario();

$usuario->loadByid(8);

$usuario->update("professor", "!@#$%&*");

echo $usuario;*/

$usuario = new Usuario();

$usuario->loadByid(8);

$usuario->delete();

echo $usuario;

?>