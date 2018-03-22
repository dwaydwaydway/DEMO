<?php
    session_start();
    if(isset($_SESSION['users'])){
        echo ($_SESSION['users']);
      }
    else{
        echo (0);
    }
?>