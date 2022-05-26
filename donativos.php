<?php

include "cabecalho.inc.php"; 
include "connect.php";

?>

<div class="container">

<div id="donativo-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Categorias</h3>
            </div>
            <div class="col-md-12" id="filter-btn-box">
              <button class="main-btn filter-btn active" id="all-btn">Todos</button>
              <button class="main-btn filter-btn" id="rou-btn">Roupas, Mesa e Banho</button>
              <button class="main-btn filter-btn" id="cal-btn">Calçados</button>
              <button class="main-btn filter-btn" id="hig-btn">Produtos de higiene</button>
              <button class="main-btn filter-btn" id="brq-btn">Brinquedos</button>
              <button class="main-btn filter-btn" id="mov-btn">Móveis e Eletrodomésticos</button>
              <button class="main-btn filter-btn" id="ut-btn">Utensílios</button>
              <button class="main-btn filter-btn" id="el-btn">Eletrônicos</button>
              <button class="main-btn filter-btn" id="inf-btn">Itens infantis</button>
              <button class="main-btn filter-btn" id="ali-btn">Alimentos/Cesta Básica</button>
              <button class="main-btn filter-btn" id="mat-btn">Materiais de Construção</button>
              <button class="main-btn filter-btn" id="out-btn">Outros</button>
            </div>


            
            <div class="col-md-3 project-box rou">
            <?php
            include "roupas.inc.php";
            ?>
            </div>
            <div class="col-md-3 project-box cal">
            <?php
            include "calcados.inc.php";
            ?>
            </div>
            <div class="col-md-3 project-box hig">
            <?php
            include "higiene.inc.php";
            ?>
            </div>
            <div class="col-md-3 project-box brq">
            <?php
            include "brinquedos.inc.php";
            ?>  
           </div>
            <div class="col-md-3 project-box mov">
            <?php
            include "moveis.inc.php";
            ?>
           </div>
            <div class="col-md-3 project-box ut">
            <?php
            include "utensilios.inc.php";
            ?>
          </div>
            <div class="col-md-3 project-box el">
            <?php
            include "eletronicos.inc.php";
            ?>
              </div>
            <div class="col-md-3 project-box inf">
            <?php
            include "itensinfantis.inc.php";
            ?>
              </div>
            <div class="col-md-3 project-box ali">
            <?php
            include "alimentos.inc.php";
            ?>
              </div>
            <div class="col-md-3 project-box mat">
            <?php
            include "materiais.inc.php";
            ?>
              </div>
            <div class="col-md-3 project-box out">
            <?php
            include "outros.inc.php";
            ?>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
      <script src="js/script.js"></script>
      <footer style="margin-top:8%">
     
     <p>Desenvolvido por <b>projeto DOE</b> - Florianópolis 2021</p>

</footer>