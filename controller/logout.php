<?php
    if(isset($_REQUEST['sair'])){
        session_unset(['login']);
        session_unset(['senha']);
        header("refresh: 2, url=login.php");
        session_destroy();
    }
?>