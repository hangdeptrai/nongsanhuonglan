<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
        header('Location: login.php');
    } else {
        header('Location: dashboard/index.php');
    }
