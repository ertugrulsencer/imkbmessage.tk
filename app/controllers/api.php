<?php

$db = new DB;

$request = [
  'type' => Helper::get('type'),
];

switch ($request['type']) {
case 'getMessages':
  echo json_encode($db->getMessages(Helper::get('message_to')));
  break;
}

exit;