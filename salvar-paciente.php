<?php
    switch($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome_paciente'];
            $email = $_POST['email_paciente'];
            $endereco = $_POST['endereco_paciente'];
            $fone = $_POST['fone_paciente'];
            $cpf = $_POST['cpf_paciente'];
            $data = $_POST['dt_nasc_paciente'];
            $sexo = $_POST['sexo_paciente'];

            $sql = "INSERT INTO paciente (nome_paciente, cpf_paciente, dt_nasc_paciente, email_paciente, endereco_paciente, fone_paciente, sexo_paciente) VALUES ('{$nome}','{$cpf}', '{$data}', '{$email}','{$endereco}','{$fone}','{$sexo}')";

            $res = $conn->query($sql);
            if ($res==true) {
                print "<script>alert('salvou com sucesso!');</script>";
                print "<script>location.href='?page=listar-paciente';</script>";
            }else {
                print "<script>alert('não foi possível salvar');</script>";
                print "<script>location.href='?page=listar-paciente';</script>";
            }
            break;
        case 'editar':
                $sql = "UPDATE paciente SET 
                    nome_paciente='".$_POST['nome_paciente']."',
                    email_paciente='".$_POST['email_paciente']."',
                    endereco_paciente='".$_POST['endereco_paciente']."',
                    fone_paciente='".$_POST['fone_paciente']."',
                    dt_nasc_paciente='".$_POST['dt_nasc_paciente']."',
                    cpf_paciente='".$_POST['cpf_paciente']."',
                    sexo_paciente='".$_POST['sexo_paciente']."'
                WHERE
                    id_paciente=".$_POST['id_paciente'];
                $res = $conn->query($sql);
                if ($res==true) {
                    print "<script>alert('editou com sucesso!');</script>";
                    print "<script>location.href='?page=listar-paciente';</script>";
                }else {
                    print "<script>alert('não foi possível editar');</script>";
                    print "<script>location.href='?page=listar-paciente';</script>";
                }      
            break; 
            case 'excluir':
                $sql = "DELETE FROM paciente WHERE id_paciente=".$_REQUEST['id_paciente'];
    
                $res = $conn->query($sql);
    
                if ($res==true) {
                    print "<script>alert('Excluiu com sucesso!');</script>";
                    print "<script>location.href='?page=listar-paciente';</script>";
                }else{
                    print "<script>alert('Não foi possível');</script>";
                    print "<script>location.href='?page=listar-paciente';</script>";
                }
            break;   
    }