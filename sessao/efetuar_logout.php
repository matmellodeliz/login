<?php
    session_start();
    session_unset();
    header("Location: http://localhost/sessao/login.php");
?>