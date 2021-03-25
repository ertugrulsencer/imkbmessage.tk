<?php

class Helper {
  public static function get($key) {
    return strip_tags(trim($_GET[$key]));
  }
  public static function post($key, $is_html) {
    if ($is_html) {
      return trim($_POST[$key]);
    } else {
      return strip_tags(trim($_POST[$key]));
    }
  }
  public static function asset($path) {
    global $config;
    return $config['SITE_URL'] . 'assets/' . $path;
  }
  public static function url($url = '/') {
    global $config;
    return $url == '/' ? $config['SITE_URL'] : $config['SITE_URL'] . trim($url, '/') . '/';
  }
}