<?php
    session_start();
    unset($_SESSION['numero_voti']);
    unset($_SESSION['ultima_data']);
    unset($_SESSION['voti']);
    header ("Location: presentazione.html");
?>
?>