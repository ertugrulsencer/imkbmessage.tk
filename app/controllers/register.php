<?php

$db = new DB;

$settings = [
  'site_title' => $db->getSettings('site_title'),
];
if (isset($_POST['register'])) {
  if (
    empty(trim(Helper::post('user_name'))) ||
    empty(trim(Helper::post('frist_name'))) ||
    empty(trim(Helper::post('last_name'))) ||
    empty(trim(Helper::post('e_mail'))) ||
    empty(trim(Helper::post('user_pass')))
  ) {
    Helper::setResponseAlert('register', '<div class="alert alert-warning">Lütfen tüm alanları doldurunuz !</div>');
    header('Location: ' . Helper::url('register'));
    exit;
  } else {
    $response = $db->registerUser([
      Helper::post('user_name'),
      Helper::post('frist_name'),
      Helper::post('last_name'),
      Helper::post('e_mail'),
      md5(Helper::post('user_pass')),
    ]);
    if (!$response) {
      $html = '<div class="alert alert-success">Başarı ile kayıt oldunuz, giriş yapabilirsiniz.</div>';
      Helper::setResponseAlert('register', $html);
      header('Location: ' . Helper::url('login'));
      exit;
    } else {
      Helper::setResponseAlert('register', $response);
      header('Location: ' . Helper::url('register'));
      exit;
    }
  }
}