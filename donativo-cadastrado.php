<?php
    $id_don = filter_input(INPUT_GET, "id_donativo", FILTER_SANITIZE_NUMBER_INT);
    var_dump($id_don);

    include "connect.php";
    include "cabecalho.inc.php";
    include "verifica_login.php";

    $sql_code = "SELECT * FROM tb_donativo where email = '$email_logado'";
    $sql_query = mysqli_query($link, $sql_code);
    $linha = $sql_query->fetch_assoc();

    $entrega["S"] = "Sim"; $entrega["N"] = "Não"; $entrega["SN"] = "Podemos conversar";

    $categoria[1] = "Roupa, Mesa e Banho"; $categoria[2] = "Calçados"; $categoria[3] = "Produtos de Higiene"; $categoria[4] = "Brinquedos"; 
    $categoria[5] = "Móveis e Eletrodomésticos"; $categoria[6] = "Utensílios"; $categoria[7] = "Eletrônicos"; $categoria[8] = "Itens infantis"; 
    $categoria[9] = "Alimentos/Cesta Básica"; $categoria[10] = "Materiais de Construção"; $categoria[11] = "Outros";
?>
		
	</div>
	</header>
	<body>
  
        <div class="container" style="margin-top: 8%;">    
            <div id="minhaconta"> 
                <?php
                    $select = "SELECT * FROM tb_donativo where id_donativo = $id_don LIMIT 1";
                    $qr = mysqli_query($link, $select);
                    $linha = mysqli_fetch_array($qr);
                ?>
                <h2 class="main-title"><strong> <?php echo $linha['nome_donativo']; ?> </strong></h2>
            </div>
            <br>
        
            <div class="barra-lateral-dados">
          
                        <img src="<?php echo 'produtos/imgProduto/'.$email_logado.'/'.$linha['fotoDonativo'];?>" width="400" alt="" /><br><br>
                        <strong> Descrição: </strong> <?php echo $linha['descricao_donativo']; ?><br>
                        <strong> Quantidade: </strong> <?php echo $linha['qtdeItem']; ?><br>
                        <strong> Status: </strong> <?php echo $linha['novo_usado']; ?><br>
                        <strong> Categoria: </strong> <?php echo $categoria[$linha['id_categoria']]; ?><br>
                        <strong> Eu posso pegar ou entregar este item: </strong> <?php echo $entrega[$linha['entregaSouN']]; ?><br>
                        <br>
                        <strong> Nome do usuário: </strong> <?php echo"$nome_logado"; ?><br>
                        <strong> Contatos </strong><br>
                        <?php echo"$email_logado"; ?><br>
                        <?php echo"$telefone_logado"; ?><br>
                        <br>
                        <strong> Localização: </strong> <?php echo"$cep_logado"; ?><br>
            </div> 
            <div class="voltar_login">
        <a href="meus-donativos.php"> Voltar </a>
        </div>
        </div> 
      



</body>

</html>


