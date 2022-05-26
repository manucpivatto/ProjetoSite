<?php
session_start();
include "connect.php";
include "cabecalho.inc.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">

	<body>

		<form class="form" action="logando.php" method="POST">
			<div class="card">
				<div class="card-top">
					<h2 class="title">Olá</h2><br>
					<p>Acesse a sua conta</p>
				</div><br>

				<div class="card-group">
				<?php
					if(isset($_SESSION['msgError']))
					{
						echo $_SESSION['msgError'];
						unset($_SESSION['msgError']);
					}
				?>
				</div>

				<br>

				<div class="card-group">
					<label> E-mail </label>
               		<input type="email" name="email" placeholder="Digite seu e-mail" required>
				</div>

				<div class="card-group">
					<label> Senha </label>                    
					<input type="password" name="senha" placeholder="Digite sua senha" required>
				</div>         

				<div class="card-group btnEsq">
					<a href="esqueci-senha.php">Esqueceu sua senha?</a>
				</div>
                <br>
				<div class="card-group btn">
                	<button type="submit" name="logar"><strong>Entrar</strong> </button>  
				</div>
				<div class="card-top">
					<p>Ainda não tem uma conta?</p>
					<a href="cadastre-usuario.php"><strong>Criar conta</strong></a>

				</div>
			</div>  
		</form>
		<br>	
</body>
<div class="voltar">
              <i class="fas fa-chevron-circle-left "></i>
              <a href="minha-conta.php">Voltar</a>
            </div>
			<br>
<footer>
        <p>Desenvolvido por <b>projeto DOE</b> - Florianópolis 2021</p>
</footer>
</html>
