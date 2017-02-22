<?php
session_start();
if (isset($_SESSION['username'])) {
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Daftar</title>
<style>
/*dark background to support form theme*/
body{
  background:url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/dark_wall.png);
}

/*sass variables used*/
$full:100%;
$auto:0 auto;
$align:center;

@mixin disable{
  outline:none;
  border:none;
}

@mixin easeme{
  -webkit-transition:1s ease;
  -moz-transition:1s ease;
  -o-transition:1s ease;
  -ms-transition:1s ease;
  transition:1s ease;
}

/*site container*/
.wrapper{
  width:420px;
  margin:$auto;
}

h1{
  text-align:$align;
  padding:30px 0px 0px 0px;
  font:25px Oswald;
  color:#0bc0c3;
  text-transform:uppercase;
  text-shadow:#000 0px 1px 5px;
  margin:0px;
}

p{
  font:13px Open Sans;
  color:#6E6E6E;
  text-shadow:#000 0px 1px 5px;
  margin-bottom:30px;
}

.form{
  width:$full;
}

input[type="email"],input[type="password"]{
  width:98%;
  padding:15px 0px 15px 8px;
  border-radius:5px;
  box-shadow:inset 4px 6px 10px -4px rgba(0,0,0,0.3), 0 1px 1px -1px rgba(255,255,255,0.3);
	background:rgba(0,0,0,0.2);
  @include disable;
  border:1px solid rgba(0,0,0,1);
  margin-bottom:10px;
  color:#0ebb96;
  text-shadow:#000 0px 1px 5px;
}

input[type="submit"]{
  width:100%;
  padding:15px;
  border-radius:5px;
  @include disable;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#09bcc7), to(#1A878F));
  background-image: -webkit-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -moz-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -o-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: linear-gradient(#0527cc 0%, #c135b0 100%);
  font:18px Oswald;
  color:#d1d400;
  text-transform:uppercase;
  text-shadow:#000 0px 1px 5px;
  border:1px solid #000;
  opacity:0.7;
	-webkit-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
  -moz-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
	box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
  border-top:1px solid rgba(255,255,255,0.8)!important;
  -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(50%, transparent), to(rgba(255,255,255,0.2)));
}

input:focus{
  box-shadow:inset 4px 6px 10px -4px rgba(0,0,0,0.7), 0 1px 1px -1px rgba(255,255,255,0.3);
  background:rgba(0,0,0,0.3);
  @include easeme;
}

input[type="submit"]:hover{
  opacity:1;
  cursor:pointer;
}

.name-help,.email-help{
  display:none;
  padding:0px;
  margin:0px 0px 15px 0px;
}

.optimize{
  position:fixed;
  right:3%;
  top:0px;
}
.tengah {
  margin-top: 180px;
}
</style>
</head>
<body>
  <center>
<div class="wrapper tengah">
  <h1>Register For An Account</h1>
  <hr>
  <form class="form" method="post" action="prosesdaftar.php">
    <input type="email" class="name" name="username" placeholder="Your email" required>

    <input type="password" class="password" name="password" placeholder="Password" required>

    <input type="submit" class="submit" value="Register">
  </form>
</div>
</center>
<br><br><br><br><br><br>
<hr>
<center>
<font color="red" font size="5">Ikuti Social Media Kami</h2></font>
<a href="https://www.instagram.com/sendiii13/" rel="nofollow" target="_blank"><img src="https://4.bp.blogspot.com/-AcrT45Y7gdY/WFSx_c4DE4I/AAAAAAAABGM/snB88XkhX6It6PrZ9w9U8qqHOz2ru3gZACLcB/s1600/instagram.png"></a>
<a href="https://www.facebook.com/Sendii13meii" rel="nofollow" target="_blank"><img src="https://3.bp.blogspot.com/-EM7xJVqKFcE/WFSx_YR8PKI/AAAAAAAABGQ/V_dKgqQoGV4dWcPOxHE9LlahRRDXbpL5gCLcB/s1600/facebook.png"></center></a>

</body>
<script>
$(".name").focus(function(){
  $(".name-help").slideDown(500);
}).blur(function(){
  $(".name-help").slideUp(500);
});

$(".email").focus(function(){
  $(".email-help").slideDown(500);
}).blur(function(){
  $(".email-help").slideUp(500);
});
</script>
</html>
