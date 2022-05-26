<?php
    header('context-type: text/html; charset=utf-8');
    include "connect.php";
    include "cabecalho2.inc.php";
    
    
?>
	<body>
        <div class="container" style="margin-top: 8%;">    
            <div id="minhaconta"> 
                <h2 class="main-title"><strong>Meus Donativos</strong></h2>
            </div>
            <br><br><br>
            <div class="col-md-4 service-box" style="margin-left:33%">
              <i class="fas fa-plus"></i>
              <a href="cadastre-donativo.php"><h4>Adicionar item</h4>
              <p>Adicione mais itens cliclando aqui</p>
            </div>   
        <br><br>      
    <table width="100%" >
        <tr>
            <?php
                $loop = 3;
                $select = "SELECT * FROM tb_donativo where email = '$email_logado'";
                $qr = mysqli_query($link, $select);
                $i = 1;

        while($linha = mysqli_fetch_array($qr)){
	        if($i < $loop){
 		        echo '
                    <td align="center" bgcolor="white"><br>  
                    <h3 class="card-title"><a href="donativo-cadastrado.php?id_donativo='.$linha['id_donativo'].'"><strong>'.$linha['nome_donativo'].'</strong></h3>           
                    <img src="produtos/imgProduto/'.$email_logado.'/'.$linha['fotoDonativo'].'" width="200" alt="" /><br>  
                    <a href="editar-donativo.php?id_donativo='.$linha['id_donativo'].'">Editar</a> | 
                    <a href="delete-donativo.php?del_donativo='.$linha['id_donativo'].'">Excluir</a> 
                    <br><br><br>              
		            </td>';

        } else if ($i = $loop) {
		        echo '
                    <td align="center" bgcolor="white"><br>  
                    <h3 class="card-title"><a href="donativo-cadastrado.php?id_donativo='.$linha['id_donativo'].'"><strong>'.$linha['nome_donativo'].'</strong></h3>            
                    <img src="produtos/imgProduto/'.$email_logado.'/'.$linha['fotoDonativo'].'" width="200" alt="" /><br> 
                    <a href="editar-donativo.php?id_donativo='.$linha['id_donativo'].'">Editar</a> | 
                    <a href="delete-donativo.php?del_donativo='.$linha['id_donativo'].'">Excluir</a> 
                    <br><br><br>               
                    </td>
                    </tr>
                    <tr>';
		        $i = 0;
        }
            $i++;
        }
            ?>
        </tr>
    </table>
    <br><br>
    </div>
</body>
<div class="voltar">
              <i class="fas fa-chevron-circle-left "></i>
              <a href="minha-conta.php">Voltar</a>
            </div>

<footer  style="margin-top:8%">
        <p>Desenvolvido por <b>projeto DOE</b> - Florianópolis 2021</p>
</footer>
</html>


            