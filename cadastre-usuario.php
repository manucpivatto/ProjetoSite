<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="utf-8">
	
    <?php
    session_start();
    include "cabecalho.inc.php";
    
    ?>		
        <!-- máscara para limite do telefone e cep -->
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

	</header>
	<body>
    <script src="https://s.codigofonte.com.br/wp-content/js/codigofonte-bar.js"></script>

        <form class="form" action="cadastrar-usuario.php" method="post" enctype="multipart/form-data"> <!-- enctype para utilizar vários tipos de arquivos -->
			<div class="card" style="margin-top: 8%;">
				<div class="card-top">

                    <h2 class="title">Olá!</h2><br>
                        <p>Crie a sua conta</p>

                </div><br><br>
                <div class="card-group">
                    <label> Nome </label>
                    <input style="text-transform:capitalize" type="text" name="nome" placeholder="Digite seu nome" required>
                </div><br>

                <div class="card-group">
                    <label> Sobrenome </label>
                    <input style="text-transform:capitalize" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
                </div><br>

                <div class="card-group">                
                    <label> Onde você está? </label>
                    <input type="text" name="cep" id="cep" value="" size="10" maxlength="8" 
                    placeholder="Seu CEP: 00000-000" onblur="pesquisacep(this.value);" required/>
                    <input type="text" name="bairro" id="bairro" size="40" placeholder="bairro"/>   
                    <input type="text" name="cidade" id="cidade" size="40" placeholder="cidade"/>    
                    <input type="text" name="uf" id="uf" size="2" placeholder="estado"/>                     
                </div><br>
                

                <div class="card-group">
                    <label> Número de telefone com DDD </label>
                    <input type="text" name="telefone" id="telefone" maxlength="13" OnKeyPress="formatar('##-#####-####', this)" placeholder="(99) 99999-9999" required>
                </div><br>

                <div class="card-group">
                    <label> E-mail</label>
                    <input type="email" name="email" placeholder="Email para fazer login" required>
                </div><br>

                <div class="card-group">
                    <label> Senha </label>                    
                    <input type="password" name="senha" id="senha" minlength="6" OnKeyPress="formatar('######', this)" placeholder="Senha (mínimo 6 caracteres)" required>
                </div>
                <div>
                <label> <input type="checkbox" onclick="mostrarOcultarSenha()"> Mostrar senha </label>
                </div><br>

                <div class="card-group">
                    <label> Dica </label>
                    <input type="text" name="dica" placeholder="Digite uma dica para lembrar a sua senha" required>
                </div>

                <br><br>

				<div class="card-group btn">
                    <button type="submit"> <strong>Cadastrar</strong> </button>  
				</div> 

				<br>

                <div class="card-top">
                    <a href="login.php"><strong>Tenho uma conta</strong></a>
                </div> 

                <br>

                <?php
                if(isset($_SESSION['status']))
                {
                    ?>
                        <div class="alert" role="alert">
                            <strong> Olá </strong> <?php echo $_SESSION['status']; ?> 
                        </div>     
               <?php
                    unset($_SESSION['status']);
                }
                ?>

            <br>
			</div>  
        </form>
        <script type="text/javascript" src="js/consulta-endereco.js"></script><br>
        <script type="text/javascript" src="js/script.js"></script><br>
                <br>
        <div class="voltar">
              <i class="fas fa-chevron-circle-left "></i>
              <a href="minha-conta.php">Voltar</a>
            </div>
            <br><br>
</body>
<footer>
        <p>Desenvolvido por <b>projeto DOE</b> - Florianópolis 2021</p>
</footer>
</html>