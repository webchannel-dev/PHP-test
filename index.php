<!DOCTYPE html>
<?php
/**
 * Copyright (c) 1978-2014 MAVAJ SUN CO, Inc. All Rights Reserved.
 *
 * This software is the confidential and proprietary information of MAVAJ SUN
 * CO, Inc. ("Confidential Information"). You shall not disclose such
 * Confidential Information and shall use it only in accordance with the terms
 * of the license agreement you entered into with MAVAJ SUN CO.
 *
 * THIS SOFTWARE IS PROVIDED "AS IS," WITHOUT A WARRANTY OF ANY KIND . ALL
 * EXPRESS OR IMPLIED CONDITIONS, REPRESENTATIONS AND WARRANTIES, INCLUDING ANY
 * IMPLIED WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE OR
 * NON-INFRINGEMENT, ARE HEREBY EXCLUDED. MAVAJ SUN CO AND ITS LICENSORS SHALL
 * NOT BE LIABLE FOR ANY DAMAGES SUFFERED BY LICENSEE AS A RESULT OF USING ,
 * MODIFYING OR DISTRIBUTING THE SOFTWARE OR ITS DERIVATIVES. IN NO EVENT WILL
 * MAVAJ SUN CO OR ITS LICENSORS BE LIABLE FOR ANY LOST REVENUE, PROFIT OR
 * DATA,OR FOR DIRECT,INDIRECT, SPECIAL, CONSEQUENTIAL, INCIDENTAL OR PUNITIVE
 * DAMAGES, HOWEVER CAUSED AND REGARDLESS OF THE THEORY OF LIABILITY, ARISING
 * OUT OF THE USE OF OR INABILITY TO USE SOFTWARE, EVEN IF SUN HAS BEEN ADVISED
 * OF THE POSSIBILITY OF SUCH DAMAGES.
 *
 * This software is not designed or intended for use in on-line control of
 * aircraft, air traffic, aircraft navigation or aircraft communications; or in
 * the design, construction, operation or maintenance of any nuclear facility.
 * Licensee represents and warrants that it will not use or redistribute the
 * Software for such purposes.
 *
 *
 * @author  : MavajSunCo (Ali Jamali)
 * @Email   : info@MavajSunCo.com
 * @Website : www.MavajSunCo.com
 * @Date    : MAR-29-2012
 * @version : 1.0
 *
 * @Decsriptoin : restricted page , only member can see this page after login to system
 */
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

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">


            <div class="container" >
                <a class="navbar-brand" href="">PHP TEST</a>
                <div class="nav-collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Public Page</a></li>
                        <li ><a href="memberPage.php">Member Page</a></li>
                        <li ><a href="register.php">Sign-up Page</a></li>
                        <li ><a href="login.php">Sing-in Page</a></li>
                    </ul>
                </div>
        </nav>

        <div class="container">
            <div class="row">

                <h1>Welcome to PHP Test & Responsive Page</h1>

                <div class="well"> Please login in order to access to membership information pages .</div>
            </div>

            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4">
                    <button type="button"  onclick="window.location.href = 'login.php'" class="btn btn-primary btn-lg btn-block"> Sign in </button>
                    <button type="button"  onclick="window.location.href = 'register.php'" class="btn btn-default btn-lg btn-block"> Sign up </button>
                </div>
                <div class="col-xs-4"></div>
            </div>
        </div>

        <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
            <div class="container" >
                <p class="text-muted">Copyright (c) 1978-2014 <a href="http://www.MavajSunCo.com">MAVAJ SUN CO</a>, All Rights Reserved.</p>
                <p class="text-hide">Designed by Ali Jamali</p>
            </div>
        </nav>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
