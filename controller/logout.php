<?php
session_start();
    session_unset(['login']);
    session_unset(['senha']);
    session_destroy();
    header("Location:../login.php");
?>