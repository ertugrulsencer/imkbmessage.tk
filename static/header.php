<header class="header">
  <div class="container d-flex align-items-center h-100 justify-content-between">
    <a href="<?=Helper::url()?>" class="logo">
      <?=$settings['site_title']?>
    </a>
    <ul class="list d-flex align-items-center justify-content-between">
      <li class="me-4">
        <a href="#intro">Tanıtım</a>
      </li>
      <li class="me-4">
        <a href="#section2">Şifreli Mesajlaşma</a>
      </li>
      <li class="me-4">
        <a href="#section3">Gelişmiş Güvenlik</a>
      </li>
      <li>
        <a href="#section4">Teknolojiler</a>
      </li>
    </ul>
    <div class="login-register">
      <a href="<?=Helper::url('login')?>" class="btn btn-sm btn-outline-light me-2">Giriş Yap</a>
      <a href="<?=Helper::url('register')?>" class="btn btn-sm btn-light">Kayıt Ol</a>
    </div>
  </div>
</header>