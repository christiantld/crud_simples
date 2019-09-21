<?php
include_once 'header.php';
?>
<div class="container">
    <h1>Cadastrar Consulta</h1>
  <div class="row">
    <form action="inclusao.php" method="get" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input  id="id_medico" name="medico" type="text" class="validate">
          <label for="id_medico">Médico</label>
        </div>
        <div class="input-field col s6">
          <input id="id_paciente" name="paciente" type="text" class="validate">
          <label for="id_paciente">Paciente</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input maxlength="10" placeholder="DD/MM/AAAA" name="data" id="id_consulta" type="text" class="validate js-date">
          <label for="id_consulta">Data da Consulta</label>
        </div>
      </div>
      <input class="btn waves-effect waves-light" type="submit" value="Cadastrar">
    </form>
  </div>
</div>
<script src="script.js"></script>
<?php
include_once 'footer.php';
?>