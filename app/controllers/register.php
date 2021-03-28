<?php

$db = new DB;

$settings = [
  'site_title' => $db->getSettings('site_title'),
];
if (isset($_POST['register'])) {
  $response = $db->registerUser([
    Helper::post('user_name'),
    Helper::post('frist_name'),
    Helper::post('last_name'),
    Helper::post('e_mail'),
    Helper::post('user_pass'),
  ]);
  if ($response) {
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