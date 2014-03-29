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
 * @Decsriptoin : User can register in this page for membership area . 
 */
$fnameErr = $lnameErr = $emailErr = $passwordErr = $fname = $lname = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["fname"])) {
        $fnameErr = "First Name is required";
    } else {
        $fname = varify_input($_POST["fname"]);
        // check if first name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $fname)) {
            $fnameErr = "Only English letters allowed";
        }
    }

    if (empty($_POST["lname"])) {
        $lnameErr = "Last Name is required";
    } else {
        $lname = varify_input($_POST["lname"]);
        // check if last name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $lname)) {
            $lnameErr = "Only English letters allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "E-mail is required";
    } else {
        $email = varify_input($_POST["email"]);
        // check if e-mail address syntax is valid
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErrErr = "Password is required";
    } else {
        $password = varify_input($_POST["password"]);
    }

    if ($fnameErr == null and $lnameErr == null and $emailErr == null and $passwordErr == null) {
        include_once 'include/db_connection.php';

        $sqlC = "insert into member( first_name, last_name, email, password) values('" . $fname . "','" . $lname . "','" . $email . "','" . $password . "' )";
        if (!mysqli_query($myConnection, $sqlC)) {
            die('Error: ' . mysqli_error($myConnection));
        }
        echo '<script type="application/javascript">alert("You have been sign-up succefully ! Please Login now with your email & password"); window.location.href = "index.php";</script>';
    }
}

function varify_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP TEST & Responsive Webpage | Login Page</title>

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
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
        </nav>

        <div class="container">
            <div class="row">
                <h1>Sign-up Page</h1>
            </div>
            <div class="row">&nbsp;<br/><br/><br/></div>
            <div class="row">
                <form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        <label for="text1" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Fist Name" name="fname" required="">
                        </div>
                        <span class="error" class="col-sm-2">* <?php echo $fnameErr; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="text2" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Last Name" name="lname" required="">
                        </div>
                        <span class="error" class="col-sm-2">* <?php echo $fnameErr; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" required="">
                        </div>
                        <span class="error">* <?php echo $emailErr; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" required="">
                        </div>
                        <span class="error">* <?php echo $passwordErr; ?></span>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </div>
                    </div>
                </form>
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