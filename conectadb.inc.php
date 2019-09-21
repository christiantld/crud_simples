<?php

$link = mysqli_connect("127.0.0.1", "root", "newpass", "ltpii_aval_1bim2019");

// mysqli_connect_errno - devolve o código do erro
if (mysqli_connect_errno()) {
  // mysqli_connect_error - devolve a mensagem de erro
  printf("Erro ao conectar ao banco de dados: %s<br> ", mysqli_connect_error());
  exit();
}