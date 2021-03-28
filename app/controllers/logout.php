<?php

session_unset();
session_destroy();
header('Location: ' . Helper::url());
exit;