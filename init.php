<?php
session_start();
require_once './config.php';
require_once './app/classes/db.class.php';
require_once './app/classes/helper.class.php';
require_once './router.php';
new Route;
$db = new DB;
$helper = new Helper;