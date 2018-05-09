<?php
  if(isset($_SESSION['username'])) {
    session_destroy();
    header('Location: '.$_SERVER['HTTP_HOST']);
    exit;
  }
?>
