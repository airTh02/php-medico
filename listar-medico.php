<h1>Listar Médico</h1>
<?php
$sql = "SELECT * FROM medico";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd >0) {
    print "<p> encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striprd table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>CRM</th>";
    print "<th>especialidade</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>".$row->id_medico. "</td>";
        print "<td>".$row->nome_medico. "</td>";
        print "<td>".$row->crm_medico. "</td>";
        print "<td>".$row->especialidade_medico. "</td>";
        print "<td>
        <button class='btn btn-success' onclick=\"location.href='?page=editar-medico&id_medico=".$row->id_medico."';\">Editar</button>
        <button class='btn btn-danger' onclick=\"if(confirm('Deseja realmente excluir?')){location.href='?page=salvar-medico&acao=excluir&id_medico=".$row->id_medico."';}else{false;}\">Excluir</button>
        ";
        print "</td>";
        print "</tr>";

    }
}