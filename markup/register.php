<?php session_start(); ?>

<html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="../css/basic.css">
<link rel="stylesheet" type="text/css" href="../css/register.css">
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



<div id="register-box">
  <?php
      require 'connection.php';
      if($_SERVER['REQUEST_METHOD']=='POST') {
        if((isset($_POST['enthu_name']))&&(isset($_POST['enthu_email']))&&(isset($_POST['enthu_contact']))&&(isset($_POST['college_name']))&&(isset($_POST['branch']))&&(isset($_POST['pass']))) {

            $var_name = mysql_real_escape_string($_POST['enthu_name']);
            if(!preg_match("/^[a-zA-Z ]*$/",$var_name)) {
                die('Only letters and white spaces allowed in Name<br>');
            }
            $var_email = mysql_real_escape_string($_POST['enthu_email']);
            if(!filter_var($var_email, FILTER_VALIDATE_EMAIL)) {
                die("Invalid email format<br>");
            }
            $var_contact = mysql_real_escape_string($_POST['enthu_contact']);
            $var_college = mysql_real_escape_string($_POST['college_name']);
            $var_branch = mysql_real_escape_string($_POST['branch']);

            $passwd = mysql_real_escape_string(md5($_POST['pass']));

            $v1 = rand(0,getrandmax());
            $v2 = rand(0,getrandmax());
            $ac_conf = $v1.$v2;
            $ac_conf_hash = md5($v1.$v2);
            $v1 = rand(0,getrandmax());
            $v2 = rand(0,getrandmax());
            $fo_pass = $v1.$v2;

            $query = "insert into student_detail (name,email,phno,college,branch,password,acc_confirm_code,forgot_pass_code)".
                    "values".
                    "('$var_name','$var_email','$var_contact','$var_college','$var_branch','$passwd','$ac_conf','$fo_pass')";

            $retval = mysql_query($query);
            if(!$retval) {
              die('Could not register'.mysql_error());
            }
            $reg_conf_code = "http://samgatha.org/reg_conf.php?acconf=".$ac_conf_hash."&suse=".$var_email;
            $reg_conf = "Please click on the link to activate<br>".$reg_conf_code;

            mail($_POST['enthu_email'],"Samgatha Account Confirmation (no reply) link",$reg_conf);

            header('Location: http://localhost/login.php');
          }
        /*
        * 2. mysql error handling using AJAX.
        * 4. Styling
        */
          else {
          echo "Please enter details to continue <br>";
        }
      }
     ?>

    Welcome to samgtha registrations. <br>
    Please fill out the following form to participate in samgatha.
    <form id="sam_register" action="register.php" method="post">

      <div class="reg-box-in">
      <label class="i2" id="ii1" for="enthu_name">Name : </label>
      <input class="i1" type="text" name="enthu_name" id="enthu_name"> <br>
      </div>

      <div class="reg-box-in">
      <label class="i2" id="ii2" for="enthu_email">E-mail Address : </label>
      <input class="i1" type="text" name="enthu_email" id="enthu_email"> <br>
      </div>

      <div class="reg-box-in">
      <label class="i2" id="ii3" for="enthu_contact">Phone No : +91</label>
      <input class="i1" type="text" name="enthu_contact" id="enthu_contact"> <br>
      </div>

      <div class="reg-box-in">
      <label class="i2" id="ii4" for="college_name">Institute : </label>
      <input class="i1" type="text" name="college_name" id="college_name"> <br>
      </div>

      <div class="reg-box-in">
      <label class="i2" id="ii5" for="branch">Discipline : </label>
      <input class="i1" type="text" name="branch" id="branch"> <br>
      </div>

      <div class="reg-box-in">
      <label class="i2" id="ii6" for="password">Password : </label>
      <input class="i1" type="text" name="pass" id="pass" maxlength="30"> <br>
      </div>

      <div class="reg-box-in">
      <button type="submit" name="register">Register</button> <br>

    </form>     </div>

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
