<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aradığınız Sayfa Bulunamadı</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="<?=Helper::asset('css/style.min.css')?>"/>
</head>
<body id="Page404">
  <?php include_once 'static/loader.php'?>
  <div class="container">
    <header>IMKB Message</header>
    <h1>Aradığınız Sayfa Bulunamadı</h1>
    <a href="<?=Helper::url()?>">
      Ana Sayfa
      <i class="fas fa-arrow-right"></i>
    </a>
  </div>
  <script src="<?=Helper::asset('js/main.js')?>"></script>
</body>
</html>