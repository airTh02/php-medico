<h1>Listar Consulta</h1>
<?php
$sql = "
    SELECT consulta.id_consulta, 
           consulta.data_consulta, 
           consulta.hora_consulta, 
           consulta.descricao_consulta, 
           paciente.nome_paciente, 
           medico.nome_medico
    FROM consulta
    JOIN paciente ON consulta.paciente_id_paciente = paciente.id_paciente
    JOIN medico ON consulta.medico_id_medico = medico.id_medico
";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p> encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Paciente</th>";
    print "<th>Médico</th>";
    print "<th>Data da Consulta</th>";
    print "<th>Hora da Consulta</th>";
    print "<th>Descrição da consulta</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>".$row->id_consulta."</td>";
        print "<td>".$row->nome_paciente."</td>";
        print "<td>".$row->nome_medico."</td>";
        print "<td>".$row->data_consulta."</td>";
        print "<td>".$row->hora_consulta."</td>";
        print "<td>".$row->descricao_consulta."</td>";
        print "<td>
        <button class='btn btn-success' onclick=\"location.href='?page=editar-consulta&id_consulta=".$row->id_consulta."';\">Editar</button>
        <button class='btn btn-danger' onclick=\"if(confirm('Deseja realmente excluir?')){location.href='?page=salvar-consulta&acao=excluir&id_consulta=".$row->id_consulta."';}else{false;}\">Excluir</button>
        </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p>Nenhuma consulta encontrada.</p>";
}
?>
