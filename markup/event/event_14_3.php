<?php session_start();
  if (!isset($_SESSION['validlogin'])) {
    $_SESSION['validlogin'] = 0;
  }
 ?>
<html>

<head>
<title>Samgatha 2016</title>
<link rel="stylesheet" type="text/css" href="../../css/basic.css" >
<link rel="stylesheet" type="text/css" href="../../css/events/event_1_1.css" >
<link rel="icon" type="image/png" href="../assets/samg_icon.png" sizes="96x96">

</head>

<body>

<?php require '../header.php'; ?>

<!-- Put your shit here  -->





   <a href="#"><div class="side_link" id="side_link1"><div class="side_link_text">Battle of Bands</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link2"><div class="side_link_text">Problem Statement</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link3"><div class="side_link_text">Registration</div></div>  </a> 
   <a href="#"><div class="side_link" id="side_link4"><div class="side_link_text">Rules of the Event</div></div> </a>  
   <a href="#"><div class="side_link" id="side_link5"><div class="side_link_text">Event Format</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link6"><div class="side_link_text">FAQ</div></div></a>
   <a href="#"><div class="side_link" id="side_link7"><div class="side_link_text">Prize Money</div></div>   </a>
   <a href="#"><div class="side_link" id="side_link8"><div class="side_link_text">Whom to Contact</div></div>   </a>
         





<div class="content" id="content_1">

<div class="content_bg"></div>
<div class="content_heading">Battle of Bands<hr></div>

<div class="content_home"><br>
<br>When the plectrums meet your guitar....When the roots beat your drums....When the bow slides over your violin….When fingers pamper your keyboard....When your voices are all set to stir the crowd up....We will turn on the mic for you.<br><br>
The royal wing of music...An intelligent play of strings often ended with applauded climax...Eastern music it is...Electrify us with your mastery
Event format:



</div>
</div>




<div class="content" id="content_2">

<div class="content_bg"></div>
<div class="content_heading">Gallery</div>





</div>


<div class="content" id="content_3">

<div class="content_bg"></div>
<div class="content_heading">Registration</div>





</div>


<div class="content" id="content_4">

<div class="content_bg"></div>
<div class="content_heading">Rules of the Event</div>





</div>



<div class="content" id="content_5">

<div class="content_bg"></div>
<div class="content_heading">Event Format</div>
<div class="content_format" style="font-size:21px;">
<hr>
<ul>
<li>Time limit is 15 min per band</li>
<li>Maximum team size is 8 persons per band.</li>
<li>The band should perform only eastern music.</li>
<li>Online registrations only-Entry fee is Rs.300 per band</li>

</ul>


</div>
</div>




<div class="content" id="content_6">

<div class="content_bg"></div>
<div class="content_heading">FAQ</div>
<div class="content_format">
<hr>
<br>
Q. Can we combine both eastern and western music in our performance??<br>
A. No,you can’t.You should perform  only eastern music<br><br>
              
Q. Will you provide any accommodation in your college??<br>
A. Yes,we will.You need to inform us if you need accommodation in our college during the fest
              <br><br>
Q. Will you provide any passports in your fest??<br>
A. Yes,One should carry the SAMGATHA 2K16 passport to participate in any event
        <br><br>
Q. Do we get any participation certificates??<br>
A. Yes,you will.the top two teams will get winning certificates.next three will get appreciation certificates and the remaining bands will get participation certificates
<br><br>
</div>
</div>




<div class="content" id="content_7">

<div class="content_bg"></div>
<div class="content_heading">Prize Money</div>

<div class="content_format">
<hr>

<br><br>

<h2> First prize-Rs.15000/-</h2>
<h2>Second prize-Rs.12000/-</h2>

</div>

</div>



<div class="content" id="content_8">

<div class="content_bg"></div>
<div class="content_heading">Whom to Contact</div>
<div class="content_format">
<hr>

<br><br>

Harika Ganta  (Cultural Co-ordinator) - 7299234195
<br><br>
Mail us : battleofbands@samgatha.org


</div>
</div>








<!-- don't your shit after here  -->

<?php require '../footer.php'; ?>



<script src="../../scripts/jquery.min.js"></script>


<script>
$('document').ready(function(){

$('#content_1').addClass('showed');

$("#side_link1").click(function(){


$('.showed').removeClass('showed');

$('#content_1').addClass('showed');







});




$("#side_link2").click(function(){


$('.showed').removeClass('showed');

$("#content_2").addClass('showed');







});


$("#side_link3").click(function(){


$('.showed').removeClass('showed');

$("#content_3").addClass('showed');







});



$("#side_link4").click(function(){


$('.showed').removeClass('showed');

$("#content_4").addClass('showed');







});



$("#side_link5").click(function(){


$('.showed').removeClass('showed');

$("#content_5").addClass('showed');







});




$("#side_link6").click(function(){


$('.showed').removeClass('showed');

$("#content_6").addClass('showed');







});




$("#side_link7").click(function(){


$('.showed').removeClass('showed');

$("#content_7").addClass('showed');







});




$("#side_link8").click(function(){


$('.showed').removeClass('showed');

$("#content_8").addClass('showed');







});


});




</script>

















</body>

</html>