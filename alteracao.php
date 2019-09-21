<?php
include 'header.php';
include_once 'inverter_data.php'
?>
<div class="container">
  <?php
  // efetua alteração do curso informado em form_alteracao.php
  $id = $_GET['id'];
  $data = $_GET["data"];
  $data = reverter($data);
  include_once "conectadb.inc.php";

  $query = "UPDATE tb_consulta
        SET  dt_consulta = '$data'
      WHERE id_consulta = $id;";
  // echo $query.'<br>';
  if ($result = mysqli_query($link, $query)) {
    echo "<h3>Alteração efetuada com sucesso</h3> ";
  } else {
    echo mysqli_error($link);
  }

  // fecha a conexão
  mysqli_close($link);
  ?>
  <br>
  <a class='btn waves-effect waves-light' href="index.php">Ver Consultas</a>
</div>

<?php
include 'footer.php';
?>