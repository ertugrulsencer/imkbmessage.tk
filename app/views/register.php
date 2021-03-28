<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kayıt Ol - <?=$settings['site_title']?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="<?=Helper::asset('css/style.min.css')?>"/>
</head>
<body>
  <?php include_once 'static/loader.php'?>
  <?php include_once 'static/header.php'?>
  <main id="pageRegister">
    <div class="container">
      <section class="image">
        <img src="<?=Helper::asset('images/svg/register.svg')?>" alt="register" width="560" />
      </section>
      <section class="form mx-auto">
        <h4 class="mb-3">Kayıt Ol</h4>
        <?=Helper::getResponseAlert('register')?>
        <form action="<?=Helper::url('register')?>" method="post">
          <input required class="form-control my-3" name="frist_name" type="text" placeholder="Ad"/>
          <input required class="form-control my-3" name="last_name" type="text" placeholder="Soyad"/>
          <input required class="form-control my-3" name="user_name" type="text" placeholder="Kullanıcı Adı"/>
          <input required class="form-control my-3" name="e_mail" type="email" placeholder="E Posta"/>
          <input required class="form-control my-3" name="user_pass" type="password" placeholder="Şifre"/>
          <input type="hidden" name="register" value="1"/>
          <button class="btn btn-primary" type="submit">Kayıt Ol</button>
        </form>
        <p class="mt-4">Hesabınız var mı ? Hemen <a href="<?=Helper::url('login')?>">giriş yapın</a></p>
      </section>
    </div>
  </main>
  <?php include_once 'static/footer.php'?>
  <script src="<?=Helper::asset('js/main.js')?>"></script>
</body>
</html>