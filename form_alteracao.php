<?php
include 'header.php';
include_once 'inverter_data.php'
?>
<div class="container">
    <?php
    $id = $_GET["id"];
    $medico = urldecode($_GET["medico"]);
    $paciente = urldecode($_GET["paciente"]);
    $data = urldecode($_GET["data"]);
    $data = inverter($data)

    ?>
     <h1>Alterar Consulta</h1>
  <div class="row">
    <form action="alteracao.php" method="get" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input disabled id="id_medico" name="medico" type="text" class="validate" value="<?php echo $medico; ?>">
          <label for="id_medico">Médico</label>
        </div>
        <div class="input-field col s6">
          <input disabled id="id_paciente" name="paciente" type="text" class="validate" value="<?php echo $paciente; ?>">
          <label for="id_paciente">Paciente</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input maxlength="10" placeholder="DD/MM/AAAA" name="data" id="id_consulta" type="text" class="validate js-date" value="<?php echo $data; ?>">
          <label for="id_consulta">Data da Consulta</label>
        </div>
      </div>
      <input maxlength="10" class="btn waves-effect waves-light" type="submit" value="Alterar">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
    </form>
  </div>

</div>
<script src="script.js"></script>
<?php
  include 'footer.php';
  ?>