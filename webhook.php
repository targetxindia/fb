<?php

  $challenge = $_REQUEST['hub.challenge'];
  $verify_token = $_REQUEST['hub.verify_token'];

  if ($verify_token === 'abc123') {
    echo $challenge;
  }

?>
