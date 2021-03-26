<?php
$db = new DB;
$settings = [
  'site_title' => $db->getSettings('site_title'),
  'title' => $db->getSettings('home_title'),
  'desc' => $db->getSettings('home_desc'),
  'keywords' => $db->getSettings('home_keywords'),
];
