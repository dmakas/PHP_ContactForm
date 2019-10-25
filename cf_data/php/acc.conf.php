<?php

    if(isset($_GET['conf-email']) && isset($_GET['conf-md5']) && isset($_GET['conf-status'])){

        // Get link parameters

        $cf_accdaten_conf_upd = [

            'email' => $_GET['conf-email'],
            'md5_kennwort' => $_GET['conf-md5'],
            'status' => $_GET['conf-status'],

        ];

        // Update status to active

        $cf_accdaten_conf_sql = "UPDATE php_cf_users SET status=:status WHERE email=:email AND md5_kennwort=:md5_kennwort";
        $cf_accdaten_conf_stmt = $db_connection->prepare($cf_accdaten_conf_sql);
        $cf_accdaten_conf_stmt->execute($cf_accdaten_conf_upd);
        $cf_daten_messages = "Your account has been verified. You may now login.";
        $cf_messages = "alert alert-success alert-dismissible messages";

    }

?>