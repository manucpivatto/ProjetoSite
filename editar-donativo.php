<!DOCTYPE html>
    <?php

    include "connect.php";
    include "cabecalho.inc.php";
    include "verifica_login.php";


    $sql_code = "SELECT * FROM tb_donativo where email = '$email_logado'";
    $sql_query = mysqli_query($link, $sql_code);
    $linha = $sql_query->fetch_assoc();
  
    $id_don_update = $_GET['id_donativo'];
    
    ?>
		

	</div>
	</header>
	<body>
        
        <br>

        <form class="form" action="atualizar-donativo.php" method="post" enctype="multipart/form-data"> <!-- enctype para utilizar vários tipos de arquivos -->
        <div class="card-top" style="margin-top: 8%;">
                <h2 class="title"> <strong>O que você gostaria de doar?</strong></h2>
            </div>
        <div class="card"><br>
		
                <div class="card-group">
                    <label> Nome do produto </label>                    
                    <input type="text" name="nome_donativo" placeholder="Nome do produto" value="<?php echo $linha['nome_donativo'];?>"  maxlength="25" required>
                </div><br>              
                
                <div class="card-group">
                <label> Descrição </label>
				<textarea style="resize:none" class="textarea" id="descricao_donativo" onkeyup="charCount();" name="descricao_donativo" 
                rows="5" cols="52" maxlength="100" minlength="3" placeholder=" Descreva aqui com mais detalhes sobre o seu donativo..." 
                required > <?php echo $linha['descricao_donativo'];?></textarea>
			    </div>
			    <span class="descricao_donativo_count" id="descricao_donativo_count"> 0/500 (Max caracteres 500)</span>
		        
	            <script type="text/javascript">
		            function charCount(){
			            var element=document.getElementById('descricao_donativo').value.length;
			            document.getElementById('descricao_donativo_count').innerHTML=element+"/500 (Max caracteres 500)";
		            }
	            </script><br>

                <div class="card-group">
                <label> Quantidade </label>
                    <input type="number" name="qtdeItem" placeholder="Quantidade" value="<?php echo $linha['qtdeItem'];?>" min="0" required>
                </div><br>

                <div class="card-group">
                <label> Esse item é Novo ou Usado? </label>
                    <label>
                        <input type="radio" name="novo_usado" value="Novo" <?php echo ($linha['novo_usado']=='Novo')?'checked':'' ?>> Novo <br>
                        <input type="radio" name="novo_usado" value="Usado" <?php echo ($linha['novo_usado']=='Usado')?'checked':'' ?>> Usado <br>  
                    </label>   
                </div><br>

                <div class="card-group">
                    <label> Qual a categoria desta doação? </label>
                        <select name="id_categoria" id="id_categoria" required>                            
                            <option value="" selected="selected">Escolha a categoria </option>
                            <option value="1" <?=$linha['id_categoria'] == '1' ? ' selected="selected"' : '';?>>Roupa, Mesa e Banho</option>
                            <option value="2" <?=$linha['id_categoria'] == '2' ? ' selected="selected"' : '';?>>Calçados</option>
                            <option value="3" <?=$linha['id_categoria'] == '3' ? ' selected="selected"' : '';?>>Produtos de Higiene</option>
                            <option value="4" <?=$linha['id_categoria'] == '4' ? ' selected="selected"' : '';?>>Brinquedos</option>
                            <option value="5" <?=$linha['id_categoria'] == '5' ? ' selected="selected"' : '';?>>Móveis e Eletrodomésticos</option>
                            <option value="6" <?=$linha['id_categoria'] == '6' ? ' selected="selected"' : '';?>>Utensílios</option>
                            <option value="7" <?=$linha['id_categoria'] == '7' ? ' selected="selected"' : '';?>>Eletrônicos</option>
                            <option value="8" <?=$linha['id_categoria'] == '8' ? ' selected="selected"' : '';?>>Itens infantis</option>
                            <option value="9" <?=$linha['id_categoria'] == '9' ? ' selected="selected"' : '';?>>Alimentos/Cesta Básica</option>
                            <option value="10" <?=$linha['id_categoria'] == '10' ? ' selected="selected"' : '';?>>Materiais de Construção</option>
                            <option value="11" <?=$linha['id_categoria'] == '11' ? ' selected="selected"' : '';?>>Outros</option>
                        </select>                     
                </div>

                <br><br>        

                <div class="card-group">
                    <label> Eu posso pegar ou entregar este item? </label>
                    <label>
                        <input type="radio" name="entregaSouN" value="S" <?php echo ($linha['entregaSouN']=='S')?'checked':'' ?>> Sim <br>
                        <input type="radio" name="entregaSouN" value="N" <?php echo ($linha['entregaSouN']=='N')?'checked':'' ?>> Não <br>
                        <input type="radio" name="entregaSouN" value="SN" <?php echo ($linha['entregaSouN']=='SN')?'checked':'' ?>> Podemos negociar <br>
                    </label>
                </div>
                <br>

                <div class="card-group">                    
                <label>Foto</label>
                <input type="file" name="fotoDonativo" id="fotoDonativo" accept="image/*" required>                
                </div><br>

                <!--<img class="mx-auto d-block" 
                src="/*<?php echo'produtos/imgProduto/'.$email_logado.'/'.$linha['fotoDonativo'];?>"
                style="width:70%; height:70%">
                <br>-->

                <div class="card-group">
                    <input type="hidden" name="idDon" value="<?php echo $id_don_update;?>">
                </div>


                <br>

				<div class="card-group btn">
                    <button type="submit" name="atualizarDon"> <strong>Salvar produto</strong> </button>  
				</div> 

				<br>
			</div>  
        </form>
            <div class="voltar" style="margin-top:8%">
            <i class="fas fa-chevron-circle-left "></i>
              <a href="meus-donativos.php">Voltar</a>
            </div>
            <br>
</body>
<footer>
        <p>Desenvolvido por <b>projeto DOE</b> - Florianópolis 2021</p>
</footer>
</html>