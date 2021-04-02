<?php

class DB extends PDO {
  function __construct() {
    global $config;
    try {
      parent::__construct('mysql:host=' . $config['MYSQL']['HOST'] . ';dbname=' . $config['MYSQL']['DB_NAME'] . ';charset=utf8', $config['MYSQL']['USER'], $config['MYSQL']['PASS']);
    } catch (PDOException $e) {
      die('Veritabanı hatası: ' . $e->getMessage());
    }
  }
  public function getSettings($name = null) {
    $sql = 'SELECT * FROM site_settings WHERE setting_key = "' . $name . '"';
    return parent::query($sql)->fetch(parent::FETCH_ASSOC)['setting_value'];
  }
  public function checkUser($user_name, $user_pass = null) {
    if ($user_pass != null) {
      $sql = 'SELECT * FROM users WHERE user_name = ? AND user_password = ?';
      $query = parent::prepare($sql);
      $result = $query->execute([
        $user_name,
        $user_pass,
      ]);
    } else {
      $sql = 'SELECT * FROM users WHERE user_name = ?';
      $query = parent::prepare($sql);
      $result = $query->execute([
        $user_name,
      ]);
    }
    return !$result ? false : $query->rowCount();
  }
  public function registerUser($data) {
    if ($this->checkUser($data[0])) {
      return '<div class="alert alert-danger py-3">Bu kullanıcı adı kullanılıyor, lütfen başka bir kullanıcı adı girin.</div>';
    }
    $sql = 'INSERT INTO users SET
            user_name = ?,
            user_first_name = ?,
            user_last_name = ?,
            user_email = ?,
            user_password = ?,
            user_date = CURRENT_TIMESTAMP';
    $query = parent::prepare($sql);
    if ($query->execute($data)) {
      return false;
    } else {
      return '<div class="alert alert-danger">Bir sorun oluştu, lütfen daha sonra tekrar deneyiniz.</div>';
    }
  }
  public function getUserInfo($user_name) {
    /* ! Şuan Boş */
  }
  public function getUserId($user_name) {
    $sql = 'SELECT * FROM users WHERE user_name = ?';
    $query = parent::prepare($sql);
    $result = $query->execute([$user_name]);
    if ($result) {
      return $query->fetch(parent::FETCH_ASSOC)['user_id'];
    } else {
      return false;
    }
  }
}