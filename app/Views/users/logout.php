<?php
session_start();
unset($_SESSION['auth']);
$_SESSION['auth'] = null;
unset($_SESSION['user']);
header('Location: index.php');