<?php

    // Check if isset Cookies of user

    if(isset($_COOKIE['cf_user_vnnamen']) && isset($_COOKIE['cf_user_cookie'])){ 

        // Set menu information

        $cf_usr_menu = '<ul class="nav navbar-nav navbar-right">';
        $cf_usr_menu .= '<li><a>Hello, ' . $_COOKIE['cf_user_vnnamen'] . '</a></li>';
        $cf_usr_menu .= '<li><a href="index.php?logout">Logout</a></li>';
        $cf_usr_menu .= '</ul>';

    }else{

        // Set login or register information

        $cf_usr_menu = '<ul class="nav navbar-nav navbar-right">';
        $cf_usr_menu .= '<li><a href="index.php?mcontent=login">Login</a></li>';
        $cf_usr_menu .= '<li><a href="index.php?mcontent=anmeldung">Anmeldung</a></li>';
        $cf_usr_menu .= '</ul>';

    }

?>


                        
                        
                    