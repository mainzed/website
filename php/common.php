<?php
require_once('twitter.php');

if ($lang) {
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

// "/mainzed/" wird zu "/"
if ($_SERVER['REQUEST_URI'] == '/') {
  $host = $_SERVER['HTTP_HOST'];
  $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $extra = $lang;
  header("Location: http://$host$uri/$extra");
} else {
  include_once '../php/' . $lang_file;
}

// get tweets via twitter api
$tweets = getTweets();
