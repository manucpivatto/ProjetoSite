<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="utf-8">
	
    <?php
    include "connect.php";
    include "cabecalho.inc.php";
    include "verifica_login.php";

    $idUsu = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);

    $select_usuario = "SELECT * FROM tb_user WHERE email = '$email_logado'";
    $resultado_usuario = mysqli_query($link, $select_usuario);
    $linha = $resultado_usuario->fetch_assoc();  
    
    ?>
		
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

        <form class="form" action="atualizar-usuario.php" method="post" enctype="multipart/form-data"> <!-- enctype para utilizar vários tipos de arquivos -->
			<div class="card" style="margin-top: 8%;">
				<div class="card-top">

                    <h2 class="title">Olá!</h2><br>
                        <p>Edite seus dados</p>

                </div><br><br>

                <div class="card-group">
                    <label class="text-center"> Seu e-mail para fazer Login é: <font size="5"> <strong><?php echo $linha['email'];?></strong></font> </label>                    
                </div>


                <div class="card-group">
                    <label> Nome </label>
                    <input style="text-transform:capitalize" type="text" name="nome" placeholder="Digite seu nome" value="<?php echo $linha['nome'];?>" required>
                </div><br>

                <div class="card-group">
                    <label> Sobrenome </label>
                    <input style="text-transform:capitalize" type="text" name="sobrenome" placeholder="Digite seu sobrenome" value="<?php echo $linha['sobrenome'];?>" required>
                </div><br>

                <div class="card-group">                
                    <label> Onde você está? </label>
                    <input type="text" name="cep" id="cep" value="<?php echo $linha['cep'];?>" size="10" maxlength="8" 
                    placeholder="Seu CEP: 00000-000" onblur="pesquisacep(this.value);" required/>
                    <input type="text" name="bairro" id="bairro" size="40" placeholder="bairro"/>   
                    <input type="text" name="cidade" id="cidade" size="40" placeholder="cidade"/>    
                    <input type="text" name="uf" id="uf" size="2" placeholder="estado"/>                     
                </div><br>

                <div class="card-group">
                    <label> Número de telefone com DDD </label>
                    <input type="text" name="telefone" id="telefone" maxlength="13" OnKeyPress="formatar('##-#####-####', this)"placeholder="(99) 99999-9999" value="<?php echo $linha['telefone'];?>" required>
                </div><br>

                <div class="card-group">
                    <label> Senha </label>                    
                    <input type="password" name="senha" id="senha" minlength="6" OnKeyPress="formatar('######', this)" placeholder="Senha (mínimo 6 caracteres)" value="<?php echo $linha['senha'];?>" required>
                </div>
                <div>
                <label> <input type="checkbox" onclick="mostrarOcultarSenha()"> Mostrar senha </label>
                </div><br>

                <div class="card-group">
                    <label> Dica </label>
                    <input type="text" name="dica" placeholder="Digite uma dica para lembrar a sua senha" value="<?php echo $linha['dica'];?>" required>
                </div><br>

                <div class="card-group">
                    <input type="hidden" name="idUsu" value="<?php echo $linha['email'];?>">
                </div>

                <br>

				<div class="card-group btn">
                    <button type="submit" name="atualizarUsu"> <strong>Salvar Meus Dados</strong> </button>  
				</div> 

				<br><br>
			</div>  
        </form>
            <script type="text/javascript" src="js/consulta-endereco.js"></script><br>
            <script type="text/javascript" src="js/script.js"></script><br>
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