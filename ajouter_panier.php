<?php
    require "class/db.php";
    $DB = new DB();

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['panier'])){
        $_SESSION['panier'] = array();
    }

    echo $_GET['id'];