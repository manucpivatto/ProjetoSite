<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="UTF-8">
	
    <?php
    session_start();
    include "cabecalho.inc.php";
    include_once ('connect.php');
    
    ?>

	<body>
        <form class="form" action="cadastrar-donativo.php" method="post" enctype="multipart/form-data"> <!-- enctype para utilizar vários tipos de arquivos -->
        <div class="card-top" style="margin-top: 8%;">
                <h2 class="title"> <strong>O que você gostaria de doar?</strong></h2>
            </div>
        <div class="card" ><br>
                <div class="card-group">
                <label> Nome do produto </label>    
                    <input type="text" name="nome_donativo" maxlength="25" style="text-transform:capitalize" placeholder="Nome do produto" required>
                </div><br>

                <div class="card-group">
                <label> Descrição </label>
				<textarea style="resize:none" class="textarea" id="descricao_donativo" onkeyup="charCount();" name="descricao_donativo" 
                rows="5" cols="52" maxlength="100" minlength="3" placeholder=" Descreva aqui com mais detalhes sobre o seu donativo..." 
                required ></textarea>
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
                    <input type="number" name="qtdeItem" placeholder="Quantidade" min="0" required>
                </div><br>

                <div class="card-group radio">
                <label> Esse item é Novo ou Usado? </label>
                    <label>
                        <input type="radio" name="novo_usado" value="Novo"> Novo <br>
                        <input type="radio" name="novo_usado" value="Usado"> Usado <br>  
                </label>   
                </div><br>

                <div class="card-group-categorias">
                    <label> Qual a categoria desta doação? </label>
                        <select name="id_categoria" id="id_categoria">
                            <option value="">Escolha a categoria</option>
                        <?php
                            $result_cat_post = "SELECT * FROM tb_categorias";
                            $resultado_cat_post = mysqli_query($link, $result_cat_post);

                                while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) 
                                {
                                $id_categoria = $dados['id_categoria'];
                                $nome_categoria = $dados['nome_categoria'];
                                echo '<option value="'.$row_cat_post['id_categoria'].'">'.$row_cat_post['nome_categoria'].'</option>';
                                }
                        ?>           
                        </select>                     
                </div>
                <br><br>

                <div class="card-group radio">
                    <label> Eu posso pegar ou entregar este item? </label>
                    <label>
                        <input type="radio" name="entregaSouN" value="S"> Sim <br>
                        <input type="radio" name="entregaSouN" value="N"> Não <br>
                        <input type="radio" name="entregaSouN" value="SN"> Podemos negociar <br>
                    </label>
                </div>
                <br>

                <div class="card-group">
                <label>Foto</label>
                <input type="file" name="fotoDonativo" accept="image/*" required>
                </div>
                <br><br>

				<div class="card-group btn">
                    <button type="submit"> <strong>Salvar</strong> </button>  
				</div> 
			</div> 
                        
        </form>
        <br><br>                            
        <div class="voltar">
              <i class="fas fa-chevron-circle-left "></i>
              <a href="minha-conta.php">Voltar</a>
            </div>
</body>
<br><br>

<footer>
        <p>Desenvolvido por <b>projeto DOE</b> - Florianópolis 2021</p>
</footer>
</html>