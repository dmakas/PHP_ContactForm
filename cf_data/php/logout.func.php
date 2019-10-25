<?php

    if(isset($_GET['logout'])){

        // Logout with cookies unset

        setcookie("cf_user_cookie", "", time() - 7200);
        setcookie("cf_user_vnnamen", "", time() - 7200);

        // Redirects

        header('Refresh: 0, url=index.php');

    }

?>