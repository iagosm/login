<?php

if(isset($_POST['email'])) {
  include('conexao.php');
  $email = $_POST['email'];
  $senha =  $_POST['senha'];

  $sql = "SELECT * FROM senhas WHERE email = '$email' LIMIT 1";
$sql = $conn->query($sql);

$usuario = $sql->fetch();
if(password_verify($senha, $usuario['senha'])) {
  echo "usuario logado!";
}else {
  echo "falha ao logar!";
}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="email" name="email" placeholder ="Digite seu e-mail">
    <input type="password" name="senha" placeholder ="Digite sua senha">
    <button type="submit"></button>
  </form>
</body>
</html>