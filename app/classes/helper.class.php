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
}