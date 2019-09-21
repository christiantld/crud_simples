<?php
include 'header.php';
?>

<body>
  <div class="container">
    <?php //exclusao.php
    // efetua a exclusão do curso cujo id seja informado.
    $id = $_GET["id"];

    include_once "conectadb.inc.php";

    $query = "DELETE FROM tb_consulta where id_consulta=$id;";
    if ($result = mysqli_query($link, $query)) {
      echo "<h3>Exclusão efetuada com sucesso</h3>";
    }

    // fecha a conexão
    mysqli_close($link);

    ?>
    <br>
    <a class='btn waves-effect waves-light' href="index.php">Ver outras consultas</a>

  </div>

  <?php
  include 'footer.php';
  ?>