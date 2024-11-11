<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Clínica Medica</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CliMed</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Médicos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=listar-medico">Listar</a></li>
            <li><a class="dropdown-item" href="?page=cadastrar-medico">Cadastrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pacientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=listar-paciente">Listar</a></li>
            <li><a class="dropdown-item" href="?page=cadastrar-paciente">Cadastrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Consulta
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=listar-consulta">Listar</a></li>
            <li><a class="dropdown-item" href="?page=cadastrar-consulta">Cadastrar</a></li>
          </ul>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Registro e Prescricões
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=listar-registro">Listar</a></li>
            <li><a class="dropdown-item" href="?page=cadastrar-registro">Cadastrar</a></li>
          </ul>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"></a>
        </li>
      </ul>

</form>
      </form>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row mt-5">
    <div class="col">
<?php
    
    include('config.php');
    switch(@$_REQUEST['page']){
        case'cadastrar-medico':
            include('cadastrar-medico.php');
            break;
        case'editar-medico':
            include('editar-medico.php');
            break;
        case'listar-medico':
            include('listar-medico.php');
            break;
        case'salvar-medico':
            include('salvar-medico.php');
            break;

            
        case'cadastrar-paciente':
            include('cadastrar-paciente.php');
            break;
        case'editar-paciente':
            include('editar-paciente.php');
            break;
        case'listar-paciente':
            include('listar-paciente.php');
            break;
        case'salvar-paciente':
            include('salvar-paciente.php');
            break;

        case'cadastrar-consulta':
            include('cadastrar-consulta.php');
            break;
        case'editar-consulta':
            include('editar-consulta.php');
            break;
        case'listar-consulta':
            include('listar-consulta.php');
            break;
        case'salvar-consulta':
            include('salvar-consulta.php');
            break;
        
        case'cadastrar-registro':
            include('cadastrar-registro.php');
            break; 
        case'editar-registro':
            include('editar-registro.php');
            break; 
        case'listar-registro':
            include('listar-registro.php');
            break; 
        case'salvar-registro':
            include('salvar-registro.php');
            break; 
               
        default:
            include('home.php');        


    }

?>
         </div>
     </div>
</div>   
    <script type="text/javascript" src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>