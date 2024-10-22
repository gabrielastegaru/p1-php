<?php

session_start();

if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;
    $msg = "Buna! Ai intrat pe pagina de " . $_SESSION['counter'] . " ori.";
} else {
    $_SESSION['counter'] = 1;
    $msg = "Ai vizitat pagina o singura data.";
}
echo $msg;