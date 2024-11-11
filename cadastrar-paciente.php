<h1>Cadastrar Paciente</h1>
<form action="?page=salvar-paciente" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
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
    
</form>