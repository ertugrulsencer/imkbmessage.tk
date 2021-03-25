<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$settings['title']?></title>
  <meta name="description" content="<?=$settings['desc']?>">
  <meta name="keywords" content="<?=$settings['keywords']?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="<?=Helper::asset('css/style.min.css')?>"/>
</head>
<body>
  <?php include_once 'static/header.php'?>
  <h1><?=$settings['title']?></h1>
  <?php include_once 'static/footer.php'?>
</body>
</html>