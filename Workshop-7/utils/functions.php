<?php

function confirmLogin (){
  session_start();
  if ( empty($_SESSION['user']) ) {
    header("Location: ../session/logout.php");
    exit();
  }
}