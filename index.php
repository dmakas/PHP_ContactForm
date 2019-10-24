<?php

    // Includes

    include('cf_data/php/vars.php');
    include('cf_data/php/anm.func.php');
    include('cf_data/php/login.func.php');
    include('cf_data/php/hdr.menu.func.php');
    include('cf_data/php/logout.func.php');
    include('cf_data/php/acc.conf.php');

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <title>PHP ContactForm</title>

        <!-- Bootstrap -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="cf_data/css/cf_style.css" crossorigin="anonymous">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">

                    <!-- Brand and toggle get grouped for better mobile display -->

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                        </ul>

                        <?php echo $cf_usr_menu; ?>

                    </div>
                </div>
            </nav>
        <header>


                <?php

                    // Include Switch menu

                    include('cf_data/php/switch.menu.php');
                    include('cf_data/php/messages.php');

                ?>


        

        <footer>
            <nav class="navbar navbar-inverse navbar-fixed-bottom">
                <div class="container-fluid">
                    <p class="navbar-text">

                        <!-- Include PDO to Database check -->
                    
                        <?php include('cf_data/php/pdo.connection.php'); ?>
                    
                    </p>
                </div>
            </nav>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <script src="cf_data/js/validator.js" crossorigin="anonymous"></script>

    </body>
</html>

<?php

    // Includes

    // include('cf_data/php/pdo.close.php');

?>