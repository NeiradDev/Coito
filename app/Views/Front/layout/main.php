<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="<?=base_url('css/bootstrap.min.css')?>" rel="stylesheet" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="<?=base_url('js/bootstrap.bundle.min.js')?>" crossorigin="anonymous"></script>

    <?=$this->include('Front/css/style')?>

    <?=$this->renderSection('style')?>

    <title>PROYECTO- <?=$this->renderSection('title')?></title>

</head>
<body>
    <?=$this->include('Front/layout/header')?>
    <?=$this->renderSection('content')?>
    <?=$this->include('Front/layout/footer')?>
</body>
</html>