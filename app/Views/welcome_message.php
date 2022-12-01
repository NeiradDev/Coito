<?=$this->extend("Front/layout/main")?>

<?=$this->section("style")?>
<?=$this->endSection()?>

<?=$this->section("title")?>Home<?=$this->endSection()?>

<?=$this->section("content")?>
<h1>Bienvenido</h1>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="./img/img1.png" height="400px" class="d-block w-100" alt="juego3">
    </div>
    <div class="carousel-item">
    <img src="./img/img2.jpg" height="400px" class="d-block w-100" alt="juego3">
    </div>
    <div class="carousel-item">
    <img src="./img/img3.jpg" height="400px" class="d-block w-100" alt="juego3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
    
<?=$this->endSection()?>
