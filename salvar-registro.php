<?php
    switch($_REQUEST['acao']) {
        case 'cadastrar':
            $idPrescricao = $_POST['id_prescricao'];
            $consultaId = $_POST['consulta_id'];
            $medicamentos = $_POST['medicamentos_prescritos'];
            $recomendacoes = $_POST['recomendacoes'];
            $data = $_POST['data_prescricao'];

            $sql = "INSERT INTO prescricao (id_prescricao, consulta_id, medicamentos_prescritos, recomendacoes, data_prescricao) VALUES ('{$idPrescricao}','{$consultaId}', '{$medicamentos}', '{$recomendacoes}','{$data}')";

            $res = $conn->query($sql);
            if ($res==true) {
                print "<script>alert('salvou com sucesso!');</script>";
                print "<script>location.href='?page=listar-registro';</script>";
            }else {
                print "<script>alert('não foi possível salvar');</script>";
                print "<script>location.href='?page=listar-registro';</script>";
            }
            break;
        case 'editar':
                $sql = "UPDATE prescricao SET 
                    id_prescricao='".$_POST['id_prescricao']."',
                    consulta_id='".$_POST['consulta_id']."',
                    medicamentos_prescritos='".$_POST['medicamentos_prescritos']."',
                    recomendacoes='".$_POST['recomendacoes']."',
                    data_prescricao='".$_POST['data_prescricao']."'
                WHERE
                    id_prescricao=".$_POST['id_prescricao'];
                $res = $conn->query($sql);
                if ($res==true) {
                    print "<script>alert('editou com sucesso!');</script>";
                    print "<script>location.href='?page=listar-registro';</script>";
                }else {
                    print "<script>alert('não foi possível editar');</script>";
                    print "<script>location.href='?page=listar-registro';</script>";
                }      
            break; 
            case 'excluir':
                $sql = "DELETE FROM prescricao WHERE id_prescricao=".$_REQUEST['id_prescricao'];
    
                $res = $conn->query($sql);
    
                if ($res==true) {
                    print "<script>alert('Excluiu com sucesso!');</script>";
                    print "<script>location.href='?page=listar-registro';</script>";
                }else{
                    print "<script>alert('Não foi possível');</script>";
                    print "<script>location.href='?page=listar-registro';</script>";
                }
            break;   
    }