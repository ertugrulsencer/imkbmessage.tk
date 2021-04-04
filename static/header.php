<header class="header">
  <div class="<?=Helper::isLogin() ? 'container-fluid' : 'container'?> d-flex align-items-center h-100 justify-content-between">
    <a href="<?=Helper::url()?>" class="logo">
      <?=$settings['site_title']?>
    </a>
    <ul class="list d-flex align-items-center justify-content-between">
      <?php if (!Helper::isLogin()): ?>
        <li class="me-4">
          <a href="<?=Helper::url()?>#intro">Tanıtım</a>
        </li>
        <li class="me-4">
          <a href="<?=Helper::url()?>#section2">Şifreli Mesajlaşma</a>
        </li>
        <li class="me-4">
          <a href="<?=Helper::url()?>#section3">Gelişmiş Güvenlik</a>
        </li>
        <li>
          <a href="<?=Helper::url()?>#section4">Teknolojiler</a>
        </li>
      <?php else: ?>
        <li class="me-4">
          <a class="px-2" href="<?=Helper::url('message')?>">
            <i class="fas fa-envelope me-2"></i>
            <span>Mesajlar</span>
          </a>
        </li>
        <li class="me-4">
          <a class="px-2" href="<?=Helper::url('profile')?>">
            <i class="fas fa-user me-2"></i>
            <span>Profil</span>
          </a>
        </li>
        <li>
          <a class="px-2" href="<?=Helper::url('settings')?>">
            <i class="fas fa-cogs me-2"></i>
            <span>Ayarlar</span>
          </a>
        </li>
      <?php endif;?>
    </ul>
    <?php if (!Helper::isLogin()): ?>
    <div class="login-register">
      <a href="<?=Helper::url('login')?>" class="btn btn-sm btn-outline-light me-2">Giriş Yap</a>
      <a href="<?=Helper::url('register')?>" class="btn btn-sm btn-light">Kayıt Ol</a>
    </div>
    <?php else: ?>
    <div class="logout">
      <a href="<?=Helper::url('logout')?>" class="btn btn-sm btn-outline-danger">Çıkış Yap</a>
    </div>
    <?php endif;?>
  </div>
</header>