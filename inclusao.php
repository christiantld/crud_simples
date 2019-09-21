<?php
include_once 'header.php';
?>
<div class="container">
    <?php
    include_once 'conectadb.inc.php';
    include_once 'inverter_data.php';

    $medico = $_GET['medico'];
    $paciente = $_GET['paciente'];
    $data = $_GET['data'];
    $data = reverter($data); 
    
    $query= "INSERT INTO tb_consulta (nm_medico, nm_paciente, dt_consulta) VALUES ('$medico', '$paciente', '$data');";
    if ($result = mysqli_query($link, $query)) {
        echo "<h3>Inclusão efetuada com sucesso</h3>";
    } else {
        echo "<h3>Error</h3>";
        echo '<a href="cadastro_consulta.php" class="btn waves-effect waves-light">Cadastrar nova consulta</a>';
    }
    mysqli_close($link);
    ?>
    <br>
    <a class='btn waves-effect waves-light' href="index.php">Ver consultas agendadas</a>
</div>
<?php
include_once 'footer.php';
?>