<?php
$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?$%€&*#';


if (isset($_GET['password'])) {
    if ($_GET['password'] == '') {
        $password = 'Non hai inserito nessun numero. Inserisci per generare la password';
    } else {
        $password_length = intval($_GET['password']);
        $password = substr(str_shuffle($characters), 0, $password_length);
    }
} else {
    $password = '';
}
