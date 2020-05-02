<?php
  session_start();
  require_once 'functions.php';
  send_to_line($_POST['message']);
  $_SESSION['message'] = $_POST['message'];
  header("Location: ./complete.php");
 ?>
