<?php

include_once 'session.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Dodawanie deviceid do tablicy w sesji
    $_SESSION['koszyk'][] = $id;

    // Przekierowanie do strony koszyka
    header('Location: paying.php');
    exit();
}
?>