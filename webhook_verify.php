<?php
  $token = "abc123";
  $challenge = $_REQUEST['hub.challenge'];
  $verify_token = $_REQUEST['hub.verify_token'];

  if ($verify_token === $token) {
    echo $challenge;
  }
?>
