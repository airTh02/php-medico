<h1>Editar Consulta </h1>
<?php
 
    $sql = "SELECT * FROM consulta WHERE id_consulta=".$_REQUEST['id_consulta'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-consulta" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_consulta" value="<?php print $row->id_consulta; ?>">
    <div class="mb-3">
    <label for="paciente_id_paciente">Paciente</label>
    <select name="paciente_id_paciente" id="paciente_id_paciente" required>
        <?php 
        $sql = "SELECT id_paciente, nome_paciente FROM paciente"; 
        $res = $conn->query($sql);
        while ($paciente = $res->fetch_assoc()) {
            echo "<option value='{$paciente['id_paciente']}'>{$paciente['nome_paciente']}</option>";
        }
        ?>
    </select>
    </div>
    <div class="mb-3">
    <label for="medico_id_medico">Médico</label>
    <select name="medico_id_medico" id="medico_id_medico" required>
        <?php 
        $sql = "SELECT id_medico, nome_medico FROM medico"; 
        $res = $conn->query($sql);
        while ($medico = $res->fetch_assoc()) {
            echo "<option value='{$medico['id_medico']}'>{$medico['nome_medico']}</option>";
        }
        ?>
    </select>
    </div>
    <div class="mb-3">
        <label for="">Data da Consulta</label>
        <input type="date" name="data_consulta" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Hora da Consulta</label>
        <input type="time" name="hora_consulta" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Descrição da consulta</label>
        <input type="text" name="descricao_consulta" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
    
</form>