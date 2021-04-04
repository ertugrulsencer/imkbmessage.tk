<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giriş Yap - <?=$settings['site_title']?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="<?=Helper::asset('css/style.min.css')?>"/>
</head>
<body>
  <?php include_once 'static/loader.php'?>
  <?php include_once 'static/header.php'?>
  <main id="pageLogin">
    <div class="container">
      <section class="image">
        <img src="<?=Helper::asset('images/svg/login.svg')?>" alt="login" width="560" />
      </section>
      <section class="form mx-auto">
        <h4>Giriş Yap</h4>
        <?=Helper::getResponseAlert('login')?>
        <?=Helper::getResponseAlert('register')?>
        <form action="<?=Helper::url('login')?>" method="post">
          <input value="<?=$_POST['user_pass'] ?? null?>" required class="form-control my-3" name="user_name" type="text" placeholder="Kullanıcı Adı"/>
          <input value="<?=$_POST['user_pass'] ?? null?>" required class="form-control my-3" name="user_pass" type="password" placeholder="Şifre"/>
          <input type="hidden" name="login" value="1"/>
          <button class="btn btn-primary" type="submit">Giriş Yap</button>
        </form>
        <p class="mt-4">Üye değil misiniz ? Hemen <a href="<?=Helper::url('register')?>">kayıt olun</a></p>
      </section>
    </div>
  </main>
  <?php include_once 'static/footer.php'?>
  <script type="module" src="<?=Helper::asset('js/main.js')?>"></script>
</body>
</html>