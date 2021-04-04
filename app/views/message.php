<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$settings['site_title']?> - Kullanıcı Adı</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="<?=Helper::asset('css/style.min.css')?>"/>
</head>
<body>
  <?php include_once 'static/loader.php'?>
  <?php include_once 'static/header.php'?>
  <main id="pageMessage">
    <section class="users">
      <div class="search">
        <input type="search" class="form-control" placeholder="Kullanıcı Ara" id="search_user"/>
        <i class="fas fa-search icon"></i>
      </div>
      <ul>
        <?php foreach ($users as $user): ?>
          <li>
            <a class="user" data-user-name="<?=$user['user_name']?>" data-user-id="<?=$user['user_id']?>" href="javascript:void(0);">
              <i class="fas fa-user-circle me-3"></i>
              <span><?=$user['user_name']?></span>
            </a>
          </li>
        <?php endforeach;?>
      </ul>
      <div class="info">
        Tasarım ve animasyon: &nbsp; <strong>Ertuğrul Sencer</strong>
      </div>
    </section>
    <section style="background-image: url('<?=Helper::asset('images/message_background.png')?>');" class="messages">
      <header class="user">
        <div class="profile d-flex align-items-center justify-content-start">
          <i class="fas fa-2x fa-user-circle me-3"></i>
          <div class="d-flex align-items-between justify-content-between flex-column">
            <strong class="name">Ertuğrul Sencer</strong>
            <span class="online">Çevrimiçi</span>
          </div>
        </div>
        <div class="buttons">
          <a href="javascript:void(0);" class="btn btn-light">
            <i class="fas fa-bars"></i>
          </a>
        </div>
      </header>
      <ul id="messages" class="messages"></ul>
      <form onsubmit="return false" id="messageForm" class="message-form d-flex align-items-center justify-content-between">
        <input class="form-control" type="text" id="messageFormContent" placeholder="Mesajınız" id="messageText" required />
        <button class="btn btn-primary ms-2" type="submit">
          <i class="fas fa-angle-right"></i>
        </button>
      </form>
    </section>
  </main>
  <?php include_once 'static/footer.php'?>
  <script type="module" src="<?=Helper::asset('js/main.js')?>"></script>
</body>
</html>