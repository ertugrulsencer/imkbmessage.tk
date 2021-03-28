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
}