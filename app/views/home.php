<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$settings['title']?></title>
  <meta name="description" content="<?=$settings['desc']?>">
  <meta name="keywords" content="<?=$settings['keywords']?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="<?=Helper::asset('css/style.min.css')?>"/>
</head>
<body>
  <?php include_once 'static/loader.php'?>
  <?php include_once 'static/header.php'?>
  <main id="pageHome">
    <section id="intro">
      <div class="container">
        <div class="texts">
          <h3><span><?=$settings['site_title']?></span> ile Ücretsiz anlık mesajlaşmaya hemen başlayın !</h3>
          <p>Hemen kayıt olun anlık mesajlaşmanın keyfini ücretsiz çıkarın, <?=$settings['site_title']?>
            ile her türlü içerik paylaşımı yapabilirsiniz. (Resim, Video, Dosya).</p>
          <a href="#section2" class="btn btn-primary">
            Şifreli Mesajlaşma
          </a>
        </div>
        <img class="mx-auto" src="<?=Helper::asset('images/svg/messages.svg')?>" alt="message" width="450"/>
      </div>
    </section>
    <section id="section2">
      <div class="container">
        <img class="mx-auto" src="<?=Helper::asset('images/svg/security_messages.svg')?>" alt="security-messages" width="450"/>
        <div class="texts">
          <h3>Mesajlarınız uçtan uca <span>şifrelenmektedir</span></h3>
          <p>Şifreli mesajları yalnızca siz görebilirsiniz,
            bu sayede gönül rahatlığı ile mesajlaşabilirsiniz ☺</p>
            <a href="#section3" class="btn btn-primary">
              Gelişmiş Güvenlik
            </a>
        </div>
      </div>
    </section>
    <section id="section3">
      <div class="container">
        <div class="texts">
          <h3>Gelişmiş <span>güvenlik teknolojileri</span> ile bütün bilgileriniz güvende</h3>
          <p>Kişisel verileriniz en güvenli şekilde kimeyele paylaşılmayacak şekilde tutulmaktadır. Detylar için <span>gizlilik politikamızı</span> inceleyiniz.</p>
          <a href="#gizlilikPolitikasi" class="btn btn-primary me-2">Gizlilik Politikası</a>
          <a href="#section4" class="btn btn-primary">Teknolojiler</a>
        </div>
        <img class="mx-auto" src="<?=Helper::asset('images/svg/security.svg')?>" alt="security" width="450"/>
      </div>
    </section>
    <section id="section4">
      <div class="container">
        <img class="mx-auto" src="<?=Helper::asset('images/svg/programmer.svg')?>" alt="programmer" width="450"/>
        <div class="texts">
          <h3>Kullandığımız <span>Teknolojiler</span></h3>
          <div class="techs row justify-content-between">
            <div class="tech d-flex align-items-center justify-content-center col-2">
              <i class="fab fa-3x fa-html5"></i>
            </div>
            <div class="tech d-flex align-items-center justify-content-center col-2">
              <i class="fab fa-3x fa-css3-alt"></i>
            </div>
            <div class="tech d-flex align-items-center justify-content-center col-2">
              <i class="fab fa-3x fa-js-square"></i>
            </div>
            <div class="tech d-flex align-items-center justify-content-center col-2">
              <i class="fab fa-3x fa-bootstrap"></i>
            </div>
            <div class="tech d-flex align-items-center justify-content-center col-2">
              <i class="fab fa-3x fa-font-awesome"></i>
            </div>
          </div>
          <div class="row mt-5 justify-content-center">
            <div class="col-6 text-center">
              <a href="<?=Helper::url('register')?>" class="btn btn-primary me-3">
                Hemen Kayıt Ol
              </a>
            </div>
            <div class="col-6 text-center">
              <a href="#intro" class="btn btn-primary">
                Tanıtıma Dön
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include_once 'static/footer.php'?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?=Helper::asset('js/main.js')?>"></script>
</body>
</html>