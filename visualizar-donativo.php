
<?php
    $id_don = filter_input(INPUT_GET, "id_donativo", FILTER_SANITIZE_NUMBER_INT);
    //var_dump($id_don);

    include "connect.php";
    include "cabecalho2.inc.php";  
    

    $sql_code = "SELECT * FROM tb_donativo";
    $sql_query = mysqli_query($link, $sql_code);
    $linha = $sql_query->fetch_assoc();

    $select = "SELECT * FROM tb_user";
    $sql_query = mysqli_query($link, $select);
    $linha = $sql_query->fetch_assoc();

    //$id_categoria = $linha['id_categoria'];
    //echo "id_categoria = $id_categoria";

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
                    $select = "SELECT don.nome_donativo, don.fotoDonativo, don.descricao_donativo, don.qtdeItem, don.novo_usado, don.id_categoria, don.entregaSouN, don.email,
                                users.telefone, users.email, users.cep
                                FROM tb_donativo don
                                LEFT JOIN tb_user AS users ON users.email=don.email
                                WHERE id_donativo = $id_don 
                                LIMIT 1";
                    $qr = mysqli_query($link, $select);
                    $linha = mysqli_fetch_array($qr);
                ?>
                <h2 class="main-title"><strong> <?php echo $linha['nome_donativo']; ?> </strong></h2>
            </div>
            <br>
        
            <div class="barra-lateral-dados">
          
                        <img src="<?php echo 'produtos/imgProduto/'?><?php echo $linha['email']?><?php echo '/'?><?php echo $linha['fotoDonativo'];?>" width="400" alt="" /><br><br>
                        <strong> Descrição: </strong> <?php echo $linha['descricao_donativo']; ?><br>
                        <strong> Quantidade: </strong> <?php echo $linha['qtdeItem']; ?><br>
                        <strong> Status: </strong> <?php echo $linha['novo_usado']; ?><br>
                        <strong> Categoria: </strong> <?php echo $categoria[$linha['id_categoria']]; ?><br>
                        <strong> Eu posso pegar ou entregar este item: </strong> <?php echo $entrega[$linha['entregaSouN']]; ?><br>
                        <strong> Contato: </strong><?php echo $linha['telefone']; ?> | <?php echo $linha['email']; ?><br>                  
</div>
            </div>
            <br><br><br><br><br><br><br>
        <div class="voltar">
              <i class="fas fa-chevron-circle-left "></i>
              <a href="minha-conta.php">Voltar</a>
            </div>
			<br>
</body>
<footer style="margin-top:8%">
     
     <p>Desenvolvido por <b>projeto DOE</b> - Florianópolis 2021</p>

</footer>
</html>