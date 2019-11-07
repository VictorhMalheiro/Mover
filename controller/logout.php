<?php
    if(isset($_REQUEST['sair'])){
        session_destroy();
        session_unset(['login']);
        session_unset(['senha']);
        header("Loacation: index.php");
    }
?>