<h1>Editar Registro</h1>
<?php
 
    $sql = "SELECT * FROM prescricao WHERE id_prescricao=".$_REQUEST['id_prescricao'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-registro" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_prescricao" value="<?php print $row->id_prescricao; ?>">
    <label for="consulta_id">Consulta:</label>
    <select name="consulta_id" required>
    <?php 
    $sql = "SELECT c.id_consulta, p.nome_paciente, c.data_consulta, c.hora_consulta 
            FROM consulta c
            JOIN paciente p ON c.paciente_id_paciente = p.id_paciente"; 
    $res = $conn->query($sql);
    while ($consulta = $res->fetch_assoc()):
    ?>
        <option value="<?= $consulta['id_consulta'] ?>">Consulta de <?= $consulta['nome_paciente'] ?> - <?= $consulta['data_consulta'] ?> - <?= $consulta['hora_consulta'] ?></option>
    <?php endwhile; ?>
    </select><br>
    <label for="medicamentos_prescritos">Medicamentos Prescritos:</label><br>
    <textarea name="medicamentos_prescritos" required></textarea><br>

    <label for="recomendacoes">Recomendações:</label><br>
    <textarea name="recomendacoes" required></textarea><br>

    <div class="mb-3">
        <label for="">Data de Prescrição</label>
        <input type="date" name="data_prescricao" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>

</form>    