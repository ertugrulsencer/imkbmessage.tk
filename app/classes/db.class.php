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
  public function getUserInfo($user_id) {
    $sql = 'SELECT * FROM users WHERE user_id = ?';
    $query = parent::prepare($sql);
    $result = $query->execute([$user_id]);
    if ($result) {
      return $query->fetch(parent::FETCH_ASSOC);
    } else {
      return false;
    }
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
  public function getUsers($limit = 10, $is_this = false) {
    if ($is_this) {
      $sql = 'SELECT * FROM users WHERE user_id != :id LIMIT 0, :limit';
      $query = parent::prepare($sql);
      $query->bindParam(':id', $_SESSION['user'], parent::PARAM_INT);
    } else {
      $sql = 'SELECT * FROM users LIMIT 0, :limit';
      $query = parent::prepare($sql);
    }
    $query->bindParam(':limit', $limit, parent::PARAM_INT);
    if ($query) {
      if ($query->execute()) {
        if ($query->rowCount()) {
          return $query->fetchAll(parent::FETCH_ASSOC);
        } else {
          return false;
        }
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
  public function getMessages($message_to, $user_name = null) {
    if (!$user_name) {
      $user_name = $this->getUserInfo($_SESSION['user'])["user_name"];
    }
    $sql = 'SELECT * FROM messages
      WHERE (message_from = ? AND message_to = ?)
      OR (message_from = ? AND message_to = ?)';
    $query = parent::prepare($sql);
    if ($query->execute([
      $user_name,
      $message_to,
      $message_to,
      $user_name,
    ])) {
      if ($query->rowCount()) {
        return $query->fetchAll(parent::FETCH_ASSOC);
      } else {
        return [
          'warning' => 'Bu kullanıcı ile henüz mesaj geçmişiniz yok.',
        ];
      }
    } else {
      return [
        'error' => 'Bir sorun oluştu, lütfen daha sonra tekrar deneyiniz.',
      ];
    }
  }
}