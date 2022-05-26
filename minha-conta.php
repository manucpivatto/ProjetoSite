<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="utf-8">
	
    <?php

    include "cabecalho2.inc.php";

    ?>

<body>
<div class="container" style="margin-top: 8%;">    
            <div id="minhaconta"> 
                <h2 class="main-title"><strong>Minha Conta</strong></h2>
            </div>
            <br><br><br><br><br>
    <div id="services-area">
        <div class="row">
            <div class="col-md-4 service-box">
              <i class="fas fa-user"></i>
              <a href="meus-dados.php"><h4>Meus dados</h4>
              <p>Acesse suas informações aqui</p>
            </div>
            <div class="col-md-4 service-box">
              <i class="fas fa-gift"></i>
              <a href="meus-donativos.php"><h4>Meus donativos</h4>
              <p>Seus produtos cadastrados</p>
            </div>
            <div class="col-md-4 service-box">
              <i class="fas fa-arrow-right"></i>
              <a href="logout.php"><h4>Sair</h4>
              <p>Sair da conta</p>
            </div>
        </div>
    </div>
</div>
</body>
<footer style="margin-top:10%">
       
        <p>Desenvolvido por <b>projeto DOE</b> - Florianópolis 2021</p>

</footer>
</html>
