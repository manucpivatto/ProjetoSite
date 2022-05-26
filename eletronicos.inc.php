
<?php
include "connect.php";

$loop = 3;
$select = "SELECT * FROM tb_donativo WHERE id_categoria='7'";
$qr = mysqli_query($link, $select);
            $i = 1;

            while($linha = mysqli_fetch_array($qr)){
            if($i < $loop){
              echo '
             
                  <td  bgcolor="white">
                  <h4 class="card-title"><a href="visualizar-donativo.php?id_donativo='.$linha['id_donativo'].'"><strong>'.$linha['nome_donativo'].'</strong></h4>           
                  <img src="produtos/imgProduto/'.$linha['email'].'/'.$linha['fotoDonativo'].'" width="250" alt="" /><br>  
                  <br><br><br>              
                  </td>';

          } else if ($i == $loop) {
              echo '
                <td  bgcolor="white"> 
                <h4 class="card-title"><a href="visualizar-donativo.php?id_donativo='.$linha['id_donativo'].'"><strong>'.$linha['nome_donativo'].'</strong></h4>            
                <img src="produtos/imgProduto/'.$linha['email'].'/'.$linha['fotoDonativo'].'" width="250" alt="" /><br> 
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
</table><?php

include "cabecalho.inc.php";


?>
