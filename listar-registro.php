<h1>Listar Registro</h1>

<?php
$sql = "
SELECT prescricao.id_prescricao, 
       prescricao.consulta_id, 
       prescricao.medicamentos_prescritos, 
       prescricao.recomendacoes, 
       prescricao.data_prescricao, 
       consulta.data_consulta, 
       consulta.hora_consulta, 
       paciente.nome_paciente, 
       medico.nome_medico
FROM prescricao
JOIN consulta ON prescricao.consulta_id = consulta.id_consulta
JOIN paciente ON consulta.paciente_id_paciente = paciente.id_paciente
JOIN medico ON consulta.medico_id_medico = medico.id_medico
";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p> encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striprd table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Consulta</th>";
    print "<th>Nome paciente</th>";
    print "<th>Medicamentos</th>";
    print "<th>Recomendações médicas</th>";
    print "<th>Data de Prescrição</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>".$row->id_prescricao."</td>";
        print "<td>".$row->consulta_id."</td>";
        print "<td>".$row->nome_paciente."</td>";
        print "<td>".$row->medicamentos_prescritos."</td>";
        print "<td>".$row->recomendacoes."</td>";
        print "<td>".$row->data_prescricao."</td>";
        print "<td>
        <button class='btn btn-success' onclick=\"location.href='?page=editar-registro&id_prescricao=".$row->id_prescricao."';\">Editar</button>
        <button class='btn btn-danger' onclick=\"if(confirm('Deseja realmente excluir?')){location.href='?page=salvar-registro&acao=excluir&id_prescricao=".$row->id_prescricao."';}else{false;}\">Excluir</button>
        ";
        print "</td>";
        print "</tr>";

    }
}