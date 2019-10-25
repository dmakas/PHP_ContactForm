<?php

    if(isset($_GET['login'])){

        // Check of user existens

        $cf_logindaten_sql = "SELECT id, vorname, nachname, email, md5_kennwort, status FROM php_cf_users WHERE email=:email LIMIT 1";
        $cf_logindaten_stmt = $db_connection->prepare($cf_logindaten_sql);
        $cf_logindaten_stmt->bindParam(':email', $_GET['useremail']);
        $cf_logindaten_stmt->execute();
        $cf_logindaten_result = $cf_logindaten_stmt->fetch();

        // MD5 crypt for var

        $cf_logindaten_md5 = md5($_GET['userpassword']);

        if($cf_logindaten_result['email'] != $_GET['useremail']){

            // Errors

            $cf_daten_messages = "User didn't exist in System!";
            $cf_messages = "alert alert-danger alert-dismissible messages";

        }elseif($cf_logindaten_result['status'] == 'Inaktive'){

            $cf_daten_messages = "Please confirm your E-mail first!";
            $cf_messages = "alert alert-danger alert-dismissible messages";

        }elseif($cf_logindaten_result['md5_kennwort'] != $cf_logindaten_md5){

            // Errors

            $cf_daten_messages = "Passwort is not correct!";
            $cf_messages = "alert alert-danger alert-dismissible messages";

        }else{

            // Set cookies and login

            $cf_logindaten_vnnamen = $cf_logindaten_result['vorname'] . ' ' . $cf_logindaten_result['nachname'];

            setcookie("cf_user_cookie", $cf_logindaten_result['id'], time() + 7200);
            setcookie("cf_user_vnnamen", $cf_logindaten_vnnamen, time() + 7200);

            // Redirect

            header('Refresh: 0, url=index.php');

        }

    }

?>