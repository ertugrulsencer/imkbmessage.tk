<?php
$db = new DB;
$settings = [
  'site_title' => $db->getSettings('site_title'),
];
if (isset($_POST['login'])) {
  if (
    empty(Helper::post('user_name')) ||
    empty(Helper::post('user_pass'))
  ) {
    Helper::setResponseAlert('login', '<div class="alert alert-warning my-3">Lütfen tüm alanları doldurunuz !</div>');
    header('Location: ' . Helper::url('login'));
    exit;
  } else {
    if ($db->checkUser(Helper::post('user_name'), Helper::post('user_pass'))) {
      Helper::setResponseAlert('login', '<div class="alert alert-success my-3">Başarı ile giriş yaptınız.</div>');
      $_SESSION['user'] = $db->getUserId(Helper::post('user_name'));
      header('Location: ' . Helper::url('profile'));
    } else {
      Helper::setResponseAlert('login', '<div class="alert alert-danger my-3">Kullanıcı adınız veya şifreniz hatalı, lütfen kontrol edip tekrar deneyiniz.</div>');
      header('Location: ' . Helper::url('login'));
    }
    exit;
  }
}