<?php
include('config.php');
$telefone = $_REQUEST['telefone'];
$email = $_REQUEST['email'];
$nome = $_REQUEST['nome'];

$sql = "INSERT INTO contatos(nome, email, celular) VALUES('".$nome."','".$email."','".$telefone."')";

$res = $conn->query($sql);

if($res==true){
  echo '<h1>Cadastrado com sucesso!</h1>';
}else{
  echo '<h1>Algo deu errado, tente novamente mais tarde</h1>';
}

?>