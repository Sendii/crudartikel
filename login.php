<?php
  session_start();
  if (isset($_SESSION['username'])) {
    header('location: index.php');
  }
  require_once("koneksi.php");
?>

<html lang="en">
<head>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Simple Login</title>
    <link rel="stylesheet" type="text/css" href="./css/stylelogin.css">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<br>
<hr>
    <div class="container">
        <div class="flat-form">
            <ul class="tabs">
                <li>
                    <a href="daftar.php" style="margin-left:100px; margin-top: 0px;">Register</a>
                </li>
            </ul>
            <div id="login" class="form-action show">
                <h1>Login on Simple Web</h1>
                <form action="proseslogin.php" method="post">
                <form>
                    <ul>
                        <li>
                            <input type="text" name="username" placeholder="Your Email" required/>
                        </li>
                        <li>
                            <input type="password" name="password" placeholder="Password" required/>
                        </li>
                        <li>
                            <input type="submit" value="Logins" class="button" />
                        </li>
                    </ul>
                </form>
            </div>
<!--/#login.form-action-->
            <div id="register" class="form-action hide">
                <form>
                    <ul>
                        <li>
                            <input type="text" placeholder="Username" />
                        </li>
                        <li>
                            <input type="password" placeholder="Password" />
                        </li>
                        <li>
                            <input type="submit" id="submit" value="Sign Up" class="button" />
                        </li>
                    </ul>
                </form>
            </div>
            <!--/#register.form-action-->
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <br>
    <center><font color="red" font size="5">Ikuti Social Media Kami</h2></font>
<a href="https://www.instagram.com/sendiii13/" rel="nofollow" target="_blank"><img src="https://4.bp.blogspot.com/-AcrT45Y7gdY/WFSx_c4DE4I/AAAAAAAABGM/snB88XkhX6It6PrZ9w9U8qqHOz2ru3gZACLcB/s1600/instagram.png"></a>
<a href="https://www.facebook.com/Sendii13meii" rel="nofollow" target="_blank"><img src="https://3.bp.blogspot.com/-EM7xJVqKFcE/WFSx_YR8PKI/AAAAAAAABGQ/V_dKgqQoGV4dWcPOxHE9LlahRRDXbpL5gCLcB/s1600/facebook.png"></center></a>
    <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</body>
</html>
