<?php

if (!isset($_SESSION['nombreUser'])){ 
  header("Location:".base_url);
  } 
?>
      <br>
      <br>
      <div class="row">
        <div class="col"></div>
            <div class="col-6 text-center ">
                <h1 class="">Bienvenido! <br> <?= $_SESSION['nombreUser'];?></h1>
                <br>
                <br>
                <a href="<?=base_url?>usuario/logout" >Cerrar Sesion</a>
            </div>
        <div class="col-3"></div>
        
      </div>