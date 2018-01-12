<?php

if ($lang != "") {
  $lang = $lang;
} else {
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  break;
  
  case 'de':
  $lang_file = 'lang.de.php';
  break;
 
  default:
  $lang_file = 'lang.de.php';
}


$isRoot = $_SERVER['REQUEST_URI'] == "/";
$isEvent = $_SERVER['REQUEST_URI'] == "/event";

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

if ($isRoot) {
  header("Location: http://$host$uri/$lang");
} else if ($isEvent) {
  header("Location: http://$host$uri/event.php");
} else {
  include_once '../php/'.$lang_file;
}
