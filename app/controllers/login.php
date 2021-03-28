<?php
$db = new DB;
$settings = [
  'site_title' => $db->getSettings('site_title'),
];
if (isset($_POST['login'])) {
  if ($db->checkUser(Helper::post('user_name'), Helper::post('user_pass'))) {
    Helper::setResponseAlert('login', '<div class="alert py-2 alert-success py-2 my-3">Başarı ile giriş yaptınız.</div>');
    $_SESSION['user'] = $db->getUserId(Helper::post('user_name'));
    header('Location: ' . Helper::url('profile'));
  } else {
    Helper::setResponseAlert('login', '<div class="alert py-2 alert-danger py-2 my-3">Kullanıcı adınız veya şifreniz hatalı, lütfen kontrol edip tekrar deneyiniz.</div>');
    header('Location: ' . Helper::url('login'));
  }
  exit;
}