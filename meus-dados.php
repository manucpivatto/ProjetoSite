<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="utf-8">
	
    <?php

    include "cabecalho2.inc.php";
    

    ?>
	
	<body>
        <div class="container" style="margin-top: 8%;">    
            <div id="minhaconta"> 
                <h2 class="main-title"><strong>Meus Dados</strong></h2>
            </div>
            <br><br><br><br>
                <div class="dados">
                            <b>Nome:</b><?php echo"$nome_logado"; ?><br>
                            <b>Sobrenome:</b> <?php echo"$sobrenome_logado"; ?><br>
                            <b>E-mail:</b> <?php echo"$email_logado"; ?><br>
                            <b>Telefone:</b> <?php echo"$telefone_logado"; ?><br>
                            <b>Localização:</b> <?php echo"$cep_logado"; ?><br>
                            <a href="editar-usuario.php?edit_user="<?php echo "$email_logado"; ?>><strong>Editar Conta  |  </strong></a> 
                            <a href="delete-conta.php?del_user=<?php echo "$email_logado"; ?>"onclick="return confirm('Você tem certeza que quer excluir sua conta?')"><strong>Excluir Conta</strong></a> 
            </div>
            <br><br><br>
</div>
            <div class="voltar" style="margin-top:8%">
            <i class="fas fa-chevron-circle-left "></i>
              <a href="minha-conta.php">Voltar</a>
            </div>
</body>
<footer style="margin-top:8%">
        <p>Desenvolvido por <b>projeto DOE</b> - Florianópolis 2021</p>
</footer>
</html>

