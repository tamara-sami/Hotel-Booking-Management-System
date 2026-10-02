<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qty = isset($_GET['qty']) ? (int)$_GET['qty'] : 1;

    // Add to session
    $_SESSION["room_$id"] = $qty;

    // Redirect to cart
    header("Location: chaekout.php");
    exit;
} else {
    echo "Room ID not provided!";
}
