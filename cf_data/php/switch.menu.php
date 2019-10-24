<?php

    // Switch menu on PHP for Login or Anmeldung/Home pages

    if(!isset($cf_switch_menu)){

        include('cf_data/pages/home.html');

    }else{

        switch($cf_switch_menu){

            case 'login':
                include('cf_data/pages/login.html');
                break;

            case 'anmeldung':
                include('cf_data/pages/anmeldung.html');
                break;

        }
            
    }

?>