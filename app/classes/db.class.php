<?php

class DB extends PDO {
  function __construct() {
    try {
      parent::__construct('mysql:host=localhost;dbname=imkb_messages;charset=utf8', 'root', '');
    } catch (PDOException $e) {
      die('Veritabanı hatası: ' . $e->getMessage());
    }
  }
  public function getSettings($name = null) {
    $sql = 'SELECT * FROM site_settings WHERE setting_key = "' . $name . '"';
    return parent::query($sql)->fetch(parent::FETCH_ASSOC)['setting_value'];
  }
}