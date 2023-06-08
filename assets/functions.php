<?php
$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?$%€&*#';
$password_length = isset($_GET['password']) ? intval($_GET['password']) : 0;;

if ($password_length > 0) {
    $password = substr(str_shuffle($characters), 0, $password_length);
} elseif ($password_length === 0) {
    $password = 'Non hai inserito nessun numero. Inserisci per generare la password';
};
