<?php

    // PDO connections

    $db_servername = "localhost";
    $db_username = "root";
    $db_password = "root";
    $db_name = "PHP_ContactForm";

    // Create connection

    $db_connection = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);

    // Switch menu Vars

    $cf_switch_menu = $_GET['mcontent'];

?>