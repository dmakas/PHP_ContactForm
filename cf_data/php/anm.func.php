<?php

    if(isset($_GET['anmelden'])){

        $cf_adresse = $_GET['userplz'] . ' ' . $_GET['useradresse2'] . ' ' . $_GET['useradresse1'];
        $cf_md5_crypt = md5($_GET['userpassword']);
        $cf_email = $_GET['useremail'];

        $cf_anmeldungsdaten = [

            'vorname' => $_GET['uservorname'],
            'nachname' => $_GET['usernachname'],
            'adresse' => $cf_adresse,
            'email' => $_GET['useremail'],
            'kennwort' => $_GET['userpassword'],
            'md5_kennwort' => $cf_md5_crypt,
            'status' => 'Inaktive',
        
        ];

        // Check if users already exist

        $cf_anmeldungsdaten_sql = "SELECT email FROM php_cf_users WHERE email=:email LIMIT 1";
        $cf_anmeldungsdaten_stmt = $db_connection->prepare($cf_anmeldungsdaten_sql);
        $cf_anmeldungsdaten_stmt->bindParam(':email', $cf_email);
        $cf_anmeldungsdaten_stmt->execute();
        $cf_anmeldungsdaten_result = $cf_anmeldungsdaten_stmt->fetch();

        if($cf_anmeldungsdaten_result['email'] == $_GET['useremail']){

            // Errors

            $cf_daten_messages = "User already exist in System!";
            $cf_messages = "alert alert-danger alert-dismissible messages";

        }else{

            $cf_anmeldungsdaten_hzfg_sql = "INSERT INTO php_cf_users (vorname, nachname, adresse, email, kennwort, md5_kennwort, status) VALUES (:vorname, :nachname, :adresse, :email, :kennwort, :md5_kennwort, :status)";
            $cf_anmeldungsdaten_hzfg_stmt = $db_connection->prepare($cf_anmeldungsdaten_hzfg_sql);
            $cf_anmeldungsdaten_hzfg_stmt->execute($cf_anmeldungsdaten);

            // Success message

            $cf_daten_messages = "Please confirm your email! We sent a letter to your E-mail.";
            $cf_messages = "alert alert-success alert-dismissible messages";

            // Mail function

            $cf_anmeldungsmail_empfaenger = $_GET['useremail'];
            $cf_anmeldungsmail_betreff = 'Account confirmation';
            $cf_anmeldungsmail_nachricht = '<h3>Please confirm your password and account!</h3> <br><br> This is your link below: <a href="http://localhost:8888/index.php?mcontent=login&conf-email=';
            $cf_anmeldungsmail_nachricht .= $cf_email;
            $cf_anmeldungsmail_nachricht .= '&conf-md5=';
            $cf_anmeldungsmail_nachricht .= $cf_md5_crypt;
            $cf_anmeldungsmail_nachricht .= '&conf-status=Aktive">Confirm</a>';

            // To send HTML mail, the Content-type header must be set

            $cf_anmeldungsmail_header  = 'MIME-Version: 1.0' . "\r\n";
            $cf_anmeldungsmail_header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            // Additional headers
            
            $cf_anmeldungsmail_header .= 'To: ' . $_GET['useremail'] . "\r\n";
            $cf_anmeldungsmail_header .= 'From: Contact Form <contactform@example.com>' . "\r\n";
            $cf_anmeldungsmail_header .= 'Cc: contactform@example.com' . "\r\n";
            $cf_anmeldungsmail_header .= 'Bcc: contactform@example.com' . "\r\n";

            mail($cf_anmeldungsmail_empfaenger, $cf_anmeldungsmail_betreff, $cf_anmeldungsmail_nachricht, $cf_anmeldungsmail_header);

        }

    }

?>