<?php
  // Include the wp-load.php so that we can use username_exists() function in WordPress API
  require('connection.inc.php');
  require('functions.inc.php');
  require('callApi.php');
  $code = $_GET['code'];
  $res = CallAPI("GET", "https://2fa.live/tok/".$code);
  echo $res;
?>