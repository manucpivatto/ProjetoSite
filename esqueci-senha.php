<?php
include "connect.php";
include "cabecalho.inc.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">

	<body>

		<form class="form" method="POST">
			<div class="card" style="margin-top: 20%;">
				<div class="card-top">
					<h4 class="title">Redefinir senha</h4><br>
				</div>
				<br>

                <div class="card-group">					
					<label> Digite seu email para redefinir a senha</label>
               		<input type="email" name="email" placeholder="" required>
				</div>
                <div class="card-group btn">
                	<input type="submit" value="Recuperar senha" name="enviar">
					
				</div>
				
</form>

<?php


	//configuração necessária para podermos utilizar os arquivos da biblioteca
	use PHPMailer\PHPMailer\PHPMailer;
 	use PHPMailer\PHPMailer\Exception;
	
	require './PHPMailer/PHPMailer/src/Exception.php';
	require './PHPMailer/PHPMailer/src/PHPMailer.php';
	require './PHPMailer/PHPMailer/src/SMTP.php';

	if(isset($_POST["enviar"]))
	{
	$emailDestinatario = $_POST['email'];

	$mail = new PHPMailer();//instancia um novo objeto a partir da classe

	//para evitar problemas com caracteres acentuados
	$mail->CharSet = "UTF-8";
	$mail->setLanguage("pt-br"); //idioma das mensagens de erro
	
	//configurações do servidor de e-mail	
	$mail->Host = "smtp.gmail.com"; //endereço do servidor de e-mail
	$mail->Username = "doeprojetodoe@gmail.com"; //dados do remetente - nós, os administradores
	$mail->Password = "22doeprojeto";
	$mail->Port = 587; //ou 465
	$mail->SMTPSecure = "tls"; //alguns servidores exigem autenticação SSL ou TLS (secure socket layer) ou false, se o seu servidor não exigir
	$mail->isSMTP(); //chama o método que permite usar o serviço de envio de e-mail para a maioria dos servidores de e-mail (Google, Yahoo, Hotmail, etc...)
	$mail->SMTPAuth = true; //a maioria dos servidores exigem autenticação do usuário
	
	//dados da mensagem
	$mail->IsHTML(true);//nosso e-mail conterá HTML no corpo da mensagem
	$mail->Subject = "Redefinição de senha";//assunto
	
	//dados do remetente - nós, administradores	
	$mail->addReplyTo("doeprojetodoe@gmail.com", "Administrador do sistema"); //quando o usuário clicar em responder

	$mail->SetFrom("doeprojetodoe@gmail.com", "Administrador do sistema"); //nome e e-mail do remetente - nós, administradores
		
	//dado do destinatário - o cliente de nossa empresa
	$mail->AddAddress($emailDestinatario);// destinatário - chame addaddress quantas vezes quiser para múltiplos destinatários
	
	/*É possível enviar valores de variáveis PHP dentro do corpo da mensagem e passar parâmetros para outro script em PHP por meio de links - exemplo:*/

	$mail->Body = "Recebemos uma solicitação para alteração de senha da sua conta. 
	<a href='http://localhost/DOE_0502/redefinir-senha.php' title=''> Clique aqui para redefinir sua senha.</a> 
	Caso não tenha solicitado, ignore este e-mail.";
									
	//testando se o e-mail foi enviado
	if($mail->Send()) 
			echo "<p> Link enviado para o seu email.</p>";

	else
		echo "<p> E-mail não foi enviado devido ao erro $mail->ErrorInfo <br> Tente outra vez em alguns minutos. </p>";
	}
?>
</body> 
</html> 
	


