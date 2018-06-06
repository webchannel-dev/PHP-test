<?php
// This is only for test propose to check out translate process is working fine or not . 
//Adding keyword array information 
include ('include/lang2.php');

//Check get param , if there is not param the default langauge will set to English 
$default = (empty($_GET['lang'])) ? 'en' : $_GET['lang'];



// Final step is to get the related translat from the selected language by exact keyword . 
//echo $lang[$default]['hello'].','.$lang[$default]['my_name'];
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP TEST & Responsive Webpage</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/google-analytics.js"></script>
    </head>

    <body>


        <div class="container">

            <div class="btn-group">
               
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Languages
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="Test2.php?lang=en">English</a></li>
                        <li><a href="Test2.php?lang=pn">Persian</a></li>
                        <li><a href="Test2.php?lang=sp">Espanish</a></li>
                        <li><a href="Test2.php?lang=ar">Arabic</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">

                <h1><?php echo $lang[$default]['title']; ?></h1>

                <div class="well"> <?php echo $lang[$default]['message']; ?></div>
            </div>

            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4">
                    <button type="button"  onclick="window.location.href = 'login.php'" class="btn btn-primary btn-lg btn-block"> <?php echo $lang[$default]['sign-in']; ?> </button>
                    <button type="button"  onclick="window.location.href = 'registration.php'" class="btn btn-default btn-lg btn-block"> <?php echo $lang[$default]['sign-up']; ?></button>
                </div>
                <div class="col-xs-4"></div>
            </div>
        </div>

        <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
            <div class="container" >
                <p class="text-muted"><?php echo $lang[$default]['copyright']; ?></p>
                <p class="text-hide">Designed by MAVAJ SUN CO</p>
            </div>
        </nav>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

