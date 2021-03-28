<?php

class Route {
  function __construct() {
    $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '/';
    $url = explode('/', $url);
    if ($this->controller($url[0])) {
      require_once $this->controller($url[0]);
      require_once $this->view($url[0]);
    } else {
      require_once $this->view('404');
    }
  }
  private function view($name) {
    $file_name = './app/views/' . trim(mb_strtolower($name)) . '.php';
    if (file_exists($file_name)) {
      return $file_name;
    } elseif ($name == '/' || $name == '') {
      return './app/views/home.php';
    } else {
      return './static/404.php';
    }
  }
  private function controller($name) {
    $file_name = './app/controllers/' . trim(mb_strtolower($name)) . '.php';
    if (file_exists($file_name)) {
      return $file_name;
    } elseif ($name == '/' || $name == '') {
      return './app/controllers/home.php';
    } else {
      return false;
    }
  }
}