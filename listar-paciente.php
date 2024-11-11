<h1>Listar Paciente</h1>
<?php
$sql = "SELECT * FROM paciente";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p> encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striprd table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>Endereço</th>";
    print "<th>Data de nascimento</th>";
    print "<th>CPF</th>";
    print "<th>Sexo</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>".$row->id_paciente."</td>";
        print "<td>".$row->nome_paciente."</td>";
        print "<td>".$row->email_paciente."</td>";
        print "<td>".$row->endereco_paciente."</td>";
        print "<td>".$row->dt_nasc_paciente."</td>";
        print "<td>".$row->cpf_paciente."</td>";
        print "<td>".$row->sexo_paciente."</td>";
        print "<td>
        <button class='btn btn-success' onclick=\"location.href='?page=editar-paciente&id_paciente=".$row->id_paciente."';\">Editar</button>
        <button class='btn btn-danger' onclick=\"if(confirm('Deseja realmente excluir?')){location.href='?page=salvar-paciente&acao=excluir&id_paciente=".$row->id_paciente."';}else{false;}\">Excluir</button>
        ";
        print "</td>";
        print "</tr>";

    }
}