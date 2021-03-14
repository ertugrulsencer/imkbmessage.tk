<?php
$db = new DB;
$settings = [
  'title' => $db->getSettings('home_title'),
  'desc' => $db->getSettings('home_desc'),
  'keywords' => $db->getSettings('home_keywords'),
];
