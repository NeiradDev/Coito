<?=$this->extend("Front/layout/main")?>

<?=$this->section("style")?>
<?=$this->endSection()?>

<?=$this->section("title")?>Lista<?=$this->endSection()?>

<?=$this->section("content")?>
<br>
<h1>Sobre Nosotros</h1>
<img src="./img/img4.png" style=" width: 300px; height: 300px;" class="d-block w-100" alt="juego3">
<br>
<br>
<div class= text-aling: center; >
<p>Mini Market EL Chagra es un local que se dedica a la venta de productos alimenticios tanto perecibles como no perecibles, así como también posee gran variedad 
de productos para el cuidado personal, la limpieza del hogar, souvenirs, etc. 
Su objetivo primordial es el de siempre brindar un servicio ameno a sus clientes y así lograr poder ser el supermercado preferido de la gente de Machachi.
</p>
</div>
<?php if (!empty(session('msg'))) { ?>
    <div class="alert alert-<?=session('msg.type')?>" role="alert">
        <?=session("msg.body")?>
    </div>
<?php } ?>

<?=$this->endSection()?>