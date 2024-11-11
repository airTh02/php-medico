<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $paciente_id_paciente = $_POST['paciente_id_paciente'];
            $medico_id_medico = $_POST['medico_id_medico'];
            $dataConsulta = $_POST['data_consulta'];
            $horaConsulta = $_POST['hora_consulta'];
            $descricaoConsulta = $_POST['descricao_consulta'];

            $sql = "INSERT INTO consulta (
                paciente_id_paciente,
                medico_id_medico,
                data_consulta,
                hora_consulta,
                descricao_consulta
            )
            VALUES (
                '{$paciente_id_paciente}',
                '{$medico_id_medico}',
                '{$dataConsulta}',
                '{$horaConsulta}',
                '{$descricaoConsulta}'
            )";

            $res = $conn->query($sql);
            if ($res==true) {
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
			}else{
				print "<script>alert('Não foi possível');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
			}
        break;
        case 'editar':
            $sql = "UPDATE consulta SET 
                paciente_id_paciente='".$_POST['paciente_id_paciente']."',
                medico_id_medico='".$_POST['medico_id_medico']."',
                data_consulta='".$_POST['data_consulta']."',
                hora_consulta='".$_POST['hora_consulta']."',
                descricao_consulta='".$_POST['descricao_consulta']."'
            WHERE
                id_consulta=".$_POST['id_consulta'];
            $res = $conn->query($sql);
            if ($res==true) {
                print "<script>alert('editou com sucesso!');</script>";
                print "<script>location.href='?page=listar-consulta';</script>";
            }else {
                print "<script>alert('não foi possível editar');</script>";
                print "<script>location.href='?page=listar-consulta';</script>";
            }
        break;
        case 'excluir':
			$sql = "DELETE FROM consulta WHERE id_consulta=".$_REQUEST['id_consulta'];

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
			}else{
				print "<script>alert('Não foi possível');</script>";
				print "<script>location.href='?page=listar-consulta';</script>";
			}
		break;
    }