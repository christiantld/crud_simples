<?php
include_once 'header.php'
?>
<div class="container">
    <h1>Consultas Cadastradas</h1>
<?php
    include_once 'conectadb.inc.php';
    include_once 'inverter_data.php';
    $query = 'SELECT id_consulta, nm_medico, nm_paciente, dt_consulta FROM tb_consulta';
    if ($result = mysqli_query($link, $query)) {
        echo "<table border='1' class=' z-depth-5 teal lighten-4 striped responsive-table'>";
        echo "<th>ID</th><th>Médico</th><th>Paciente</th><th>Data Consulta</th><th class='centered' colspan=\"2\">Ações</th></<th>";
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row["id_consulta"];
            $medico = $row["nm_medico"];
            $paciente = $row["nm_paciente"];
            $data = $row["dt_consulta"];
            $newdate = inverter($data);

            echo "<tr>";
            echo "<td>". $id . "</td>";
            echo "<td>". $medico . "</td>";
            echo "<td>". $paciente . "</td>";
            echo "<td>". $newdate . "</td>";
            //exclusao
            echo '<td><a class="waves-effect waves-teal btn red lighten-2" href="exclusao.php?id=' . $id . '">Excluir</a></td>';
            //alteracao
            echo '<td><a class="waves-effect waves-teal btn orange lighten-2" href="form_alteracao.php?id=' . $id . '&data=' . urlencode($data) . '&paciente=' . urlencode($paciente) .'&medico=' . urlencode($medico) . '">Alterar</a></td>';

            echo "</tr>";
        }
        echo "</table>";

        //liberar memoria
        mysqli_free_result($result);
    }
    mysqli_close($link)
?>
 <br>
    <a href="cadastro_consulta.php" class='btn waves-effect waves-light'>Cadastrar nova consulta</a>
</div>
<?php
include_once 'footer.php'
?>