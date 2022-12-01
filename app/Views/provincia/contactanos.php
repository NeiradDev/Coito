<?= $this->extend("Front/layout/main") ?>

<?= $this->section("style") ?>
<?= $this->endSection() ?>

<?= $this->section("title") ?>Lista<?= $this->endSection() ?>

<?= $this->section("content") ?>
<br>
<h1>Contactanos</h1>
<div class="container">
    <div class="row">
        <form class="row justify-content-center" method="post">
            <div class="row justify-content-center">
                <div class="col-4">
                    <input id="name" name="name" type="text" placeholder="Nombre" class="form-control">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-4">
                    <input id="email" name="email" type="text" placeholder="Correo Electrónico" class="form-control">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-4">
                    <input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-4">
                    <textarea class="form-control" id="message" name="message" placeholder="Introduzca su mensaje para nosotros aquí. Nos pondremos en contacto con usted dentro de 2 días hábiles." rows="7"></textarea>
                </div>
            </div>
            <br>
            <div class="btn-Container">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-danger btn-lg">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php if (!empty(session('msg'))) { ?>
    <div class="alert alert-<?= session('msg.type') ?>" role="alert">
        <?= session("msg.body") ?>
    </div>
<?php } ?>

<?= $this->endSection() ?>