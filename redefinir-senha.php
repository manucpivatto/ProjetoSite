<?php
include "connect.php";
include "cabecalho.inc.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">

<script>
        function formatar(mascara, documento){
        var i = documento.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(i)

            if (texto.substring(0,1) != saida){
                documento.value += texto.substring(0,1);
            }
        }
    </script>


	<body>

		<form class="form" method="POST">
			<div class="card" style="margin-top: 20%;">
				<div class="card-top">
					<h2 class="title">Esqueci a senha</h2><br>
				</div>
				<br><br>

                <div class="card-group">					
					<label> Digite seu email de login</label>
               		<input type="email" name="email" placeholder=""  required>
				</div>

                <div class="card-group">					
					<label> Digite sua nova senha</label>
               		<input type="password" name="senha" id="senha" minlength="6" OnKeyPress="formatar('######', this)" placeholder="Senha (mínimo 6 caracteres)" required>
				</div>
				<div>
                <label> <input type="checkbox" onclick="mostrarOcultarSenha()"> Mostrar senha </label>
                </div>
                <div class="card-group btn">
                	<input type="submit" value="Criar nova senha" name="enviar" class="btn btn-outline-success btn-lg btn-block">
				</div>
				<br>				
</form>
	</div>
	<br><br>
<div class="voltar">
              <i class="fas fa-chevron-circle-left "></i>
              <a href="login.php">Voltar</a>
            </div>
			<br><br>
			<footer>
        <p>Desenvolvido por <b>projeto DOE</b> - Florianópolis 2021</p>
</footer>


<?php

global $error;

if (isset($_POST['email']) && (!empty($_POST['email']))) {
	$emailDestinatario = $_POST['email'];
	$emailDestinatario = filter_var($emailDestinatario, FILTER_SANITIZE_EMAIL);
	$emailDestinatario = filter_var($emailDestinatario, FILTER_VALIDATE_EMAIL);

	if (!$emailDestinatario){
		$error .="E-mail inválido";		
	} else {
		$select = "SELECT * FROM tb_user WHERE email = '" . $emailDestinatario . "'";
		$resultado = mysqli_query($link, $select);
    	$linha = mysqli_num_rows($resultado);
		if ($linha == ""){
			$error .= "* O e-mail informado não existe";
		}
	}
	
	if ($error != ""){
		echo $error;
	} else {

		if(isset($_POST["enviar"])) {			
			$novaSenha = addslashes($_POST['senha']);
	
			$sql = mysqli_query($link, "UPDATE tb_user SET senha = '$novaSenha' WHERE email = '$emailDestinatario'");

			echo "<p>* Sua nova senha foi alterada com sucesso!</p>";	
		}
	}
}

?>

</body> 
</html> 