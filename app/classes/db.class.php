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
  public function checkUser($user_name, $user_pass) {
    $sql = 'SELECT * FROM users WHERE user_name = ? AND user_password = ?';
    $query = parent::prepare($sql);
    $result = $query->execute([
      $user_name,
      $user_pass,
    ]);
    return !$result ? false : $query->rowCount();
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