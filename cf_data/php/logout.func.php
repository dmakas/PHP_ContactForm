<?php

    if(isset($_GET['logout'])){

        setcookie("cf_user_cookie", "", time() - 7200);
        setcookie("cf_user_vnnamen", "", time() - 7200);
        header('Refresh: 0, url=index.php');

    }

?>