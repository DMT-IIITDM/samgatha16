<?php
  session_start();
 ?>


<html>

<head>
<title>Login Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="../css/basic.css" >
<link rel="stylesheet" type="text/css" href="../css/login.css" >
</head>

<body>
<div id="sky2"> 
<div class="star2" id="s2tar1"> </div>
<div class="star2" id="s2tar2"> </div>
<div class="star2" id="s2tar3"> </div>
<div class="star2" id="s2tar4"> </div>
<div class="star2" id="s2tar5"> </div>
<div class="star2" id="s2tar6"> </div>
<div class="star2" id="s2tar7"> </div>
<div class="star2" id="s2tar8"> </div>
<div class="star2" id="s2tar9"> </div>
<div class="star2" id="s2tar10"> </div>
<div class="star2" id="s2tar11"> </div>
<div class="star2" id="s2tar12"> </div>
<div class="star2" id="s2tar13"> </div>
<div class="star2" id="s2tar14"> </div>
<div class="star2" id="s2tar15"> </div>
<div class="star2" id="s2tar16"> </div>
<div class="star2" id="s2tar17"> </div>

</div>

<div id="sky1">
<div class="star1" id="s1tar1"></div>
<div class="star1" id="s1tar2"></div>
<div class="star1" id="s1tar3"></div>
<div class="star1" id="s1tar4"></div>
<div class="star1" id="s1tar5"></div>
<div class="star1" id="s1tar6"></div>
<div class="star1" id="s1tar7"></div>
<div class="star1" id="s1tar8"></div>
<div class="star1" id="s1tar9"></div>
<div class="star1" id="s1tar10"></div>
<div class="star1" id="s1tar11"></div>
<div class="star1" id="s1tar12"></div>
<div class="star1" id="s1tar13"></div>
<div class="star1" id="s1tar14"></div>
<div class="star1" id="s1tar15"></div>
<div class="star1" id="s1tar16"></div>
<div class="star1" id="s1tar17"></div>
</div>

<div id="sky3">
<div class="star3" id="s3tar1"></div>
<div class="star3" id="s3tar2"></div>
<div class="star3" id="s3tar3"></div>
<div class="star3" id="s3tar4"></div>
<div class="star3" id="s3tar5"></div>
<div class="star3" id="s3tar6"></div>
<div class="star3" id="s3tar7"></div>
<div class="star3" id="s3tar8"></div>
<div class="star3" id="s3tar9"></div>
<div class="star3" id="s3tar10"></div>
<div class="star3" id="s3tar11"></div>
<div class="star3" id="s3tar12"></div>
</div>



<div id="sky4">
<div class="star4" id="s4tar1"></div>
<div class="star4" id="s4tar2"></div>
</div>


<img id="samg" src="../assets/p1.png">

<div id="head">
<svg viewBox="0 0 1100 600">
  <symbol id="s-text">
    <text text-anchor="middle" x="25%" y="48%" class="text--line">
      S
    </text>
    <text text-anchor="middle" x="62%" y="48%" class="text--line2">
      AMGATHA
    </text>
    <text text-anchor="middle" x="75%" y="30%" class="text--line3">
      2016
    </text>
  </symbol>

  <g class="g-ants">
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
    <use xlink:href="#s-text" class="text-copy"></use>
  </g>


</svg></div>

<div id="nav">
<div id="night" class="lay2"><div id="nightt">WORKSHOPS</div></div>
<div id="event" class="lay2"><div id="eventt">EVENTS</div></div>
<div id="spon" class="lay2"><div id="spont">SPONSORS</div></div>
<div id="contact" class="lay2"><div id="contactt">REACH US</div></div>
<div id="about" class="lay2"><div id="aboutt">ABOUT US</div></div>
<div id="register" class="lay2"><div id="registert">Sign In/Up</div></div>

</div>

<!-- Put your shit here  -->

<div style="position:absolute; top:200px; left:20%; color:#fff; font-size:20px;">This Page is still under testing</div>

<div id="login-box">
  <?php
  require 'connection.php';
  if(isset($_POST['uname'])) {
    $name = $_POST['uname'];
    $retval = mysql_query("select password , sam_id, confirm_bit from student_detail where email='$name'");
    //echo "$name<br>";
    if(!$retval) {
      die('Could not query'.mysql_error());
    }
    $row = mysql_fetch_row($retval);
    if (empty($row)) {
      echo "Username does not exist<br>";
    }
    //echo "$row[0]"; This is the password.
    if (isset($_POST['pass'])) {
      $passwd = $_POST['pass'];
      $passwd = mysql_real_escape_string(md5($passwd));
      //echo "$passwd";
      if ($row[2]==0) {
        die('Please activate your account<br>');
      }
      if($passwd == $row[0]) {
        //echo "Login Successful, welcome $name";
        $_SESSION["uname"] = $name;
        $_SESSION["validlogin"] = 1;
        $_SESSION['samid'] = $row[1];
        echo $_SESSION['samid'];
        header('Location: http://localhost/basic.html');
      }
      else {
        echo "Login failed";
      }
    }
    else {
      echo "Please enter the password";
    }
  }
  else {
    echo "Please enter username";
  }
?>
<form action="login.php" method="post">
      
      <div class="login-box-in">
      <label for="uname">Username: </label>
      <input type="text" name="uname" id="username"><br>
      </div>

      <div class="login-box-in">
      <label for="pass">Password: </label>
      <input type="password" name="pass" id="password" ><br>
      </div>
      
      <div class="login-box-in"><a href="register.php">Register</a>
      
      <a id="fgps" href="forgot.php">Forgot Password</a><br>
      </div>

      <div class="login-box-in"><button type="submit" name="login" id="login_button">Login</button></div>

    </form>
</div>





<!-- don't your shit after here  -->

<footer>

<div id="webops"><webops>webops@samgatha.org</webops></div>
<div id="link1"  class="footer_link" ><a  class="f_l" href="about.html">About Us</a></div>
<div id="link2"  class="footer_link"><a  class="f_l" href="feedback.html">Feedback</a></div>
<div id="link3"  class="footer_link"><a  class="f_l" href="sponsors.html">Sponsors</a></div>
<div id="link4"  class="footer_link"><a  class="f_l" href="hospi.html">Hospitality</a></div>
<div id="link5"  class="footer_link"><a  class="f_l" href="makeindia.html">Make in India</a></div>
<div id="link6"  ><a href="http://www.facebook.com/samgthaatiiitdm" ><img src="../assets/fb.svg"  width="30px" height="30px"></a></div>
<div id="link7"  ><a href="http://twitter.com/samgatha" ><img src="../assets/twit.svg"  width="30px" height="30px"></a></div>
<div id="link8"  ><a href="http://www.youtube.com/user/SamgathaIIITDM/featured" ><img src="../assets/youtube.svg"  width="30px" height="30px"></a></div>

</footer>

</body>

</html>
