<?php

$db = new DB;

$settings = [
  'site_title' => $db->getSettings('site_title'),
];