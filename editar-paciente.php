<h1>Editar Paciente</h1>

<?php
 
    $sql = "SELECT * FROM paciente WHERE id_paciente=".$_REQUEST['id_paciente'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-paciente" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_paciente" value="<?php print $row->id_paciente; ?>">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="nome_paciente" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" name="email_paciente" class="form-control">
    </div>
    <div class="mb-3">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco_paciente" class="form-control">
    </div>
    <div class="mb-3">
        <label for="fone">Fone</label>
        <input type="text" name="fone_paciente" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Data de nascimento</label>
        <input type="date" name="dt_nasc_paciente" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">CPF</label>
        <input type="text" name="cpf_paciente" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Sexo</label>
       <label for=""><input type="radio" name="sexo_paciente" value="m">Masculino</label> 
       <label for=""><input type="radio" name="sexo_paciente" value="f">Feminino</label> 
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>


