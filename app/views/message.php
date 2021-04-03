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
        <?php for ($i = 0; $i < 20; $i++): ?>
          <li>
            <a href="#!">
              <i class="fas fa-user-circle me-3"></i>
              <span>Ertuğrul Sencer</span>
            </a>
          </li>
        <?php endfor;?>
      </ul>
    </section>
    <section style="background-image: url('<?=Helper::asset('images/message_background.png')?>');" class="messages">
      <ul class="messages">
        <div class="message your">
          Mesaj içeriği alanı falan filan
        </div>
        <div class="message">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, facilis.
        </div>
        <div class="message your">
          Lorem ipsum dolor sit.
        </div>
        <div class="message">
          Lorem, ipsum dolor.
        </div>
        <div class="message your">
          Mesaj içeriği alanı falan filan
        </div>
        <div class="message your">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, facilis.
        </div>
        <div class="message your">
          Lorem ipsum dolor sit.
        </div>
        <div class="message">
          Lorem, ipsum dolor.
        </div>
        <div class="message">
          Lorem, ipsum dolor.
        </div>
        <div class="message your">
          Mesaj içeriği alanı falan filan
        </div>
        <div class="message">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, facilis.
        </div>
        <div class="message your">
          Lorem ipsum dolor sit.
        </div>
        <div class="message">
          Lorem, ipsum dolor.
        </div>
        <div class="message your">
          Mesaj içeriği alanı falan filan
        </div>
        <div class="message your">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, facilis.
        </div>
        <div class="message your">
          Lorem ipsum dolor sit.
        </div>
        <div class="message">
          Lorem, ipsum dolor.
        </div>
        <div class="message">
          Lorem, ipsum dolor.
        </div>
      </ul>
      <form onsubmit="return false" class="message-form d-flex align-items-center justify-content-between">
        <input class="form-control" type="text" placeholder="Mesajınız" id="messageText" required />
        <button class="btn btn-primary ms-2" type="submit">
          <i class="fas fa-angle-right"></i>
        </button>
      </form>
    </section>
  </main>
  <?php include_once 'static/footer.php'?>
  <script src="<?=Helper::asset('js/main.js')?>"></script>
</body>
</html>