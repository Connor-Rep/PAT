<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Safetay Electrical Testing</title>
<link href="css/sheet.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/bform.css">

</head>
<body> 
<div id="holder">
<div id="fb-root"></div>
<script id="facebook-jssdk" src="js/sdk.js#xfbml=1&amp;version=v2.0"></script><script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="banner">
<div id="logo"><a href="index.html"><img src="images/logo.png"></a></div>
<div id="contacts">


	<div id="social"> </div>
Telephone:  Mob:07775 435 872 <br>
email: info@safetayelectricaltesting.co.uk  
 </div>
</div><div id="content">
<div id="menu"><a href="index.html" class="homer">Home</a>
<a href="about-pat-testing.html">Regulations &amp; Information</a>
<a href="about-testing.html">About PAT Testing</a>
<a href="customer-reviews.html">customer reviews</a>
 <a id="linked" href="enquiries.php" class="enquiries" style="float: right;">get in touch</a></div><div id="textarea">
<div id="map"></div>
<h1>Contact Safetay Electrical Testing</h1>
<div class="weebox">

Address: <br>
<pre>Unit 12  The Old Dairy
Meikleour Perthshire
PH2 6FB
</pre>

 </div>
<div class="weebox">

Telephone:  Mob:07775 435 872 <br>
Email: <a href="mailto:info@safetayelectricaltesting.co.uk  ">info@safetayelectricaltesting.co.uk  </a><br>
 </div>
<br style="clear:both;">
<p>If you would like to make an out of hours enquiry or email us, please use the form below.</p>
<div class="done">
<h1>Thank you !  Your message has been sent. We will contact you within the next 24 hours..</h1></div>
<div class="block form">
<form id="form" method="post" action="bform.php">
<fieldset>
<legend>Your Details</legend>

<label for="mainname">Your Name <input name="lead" id="lead" type="text"></label>
<label for="telephone">Telephone<input name="telephone" id="telephone"></label>
<label for="email">Email <input name="email" id="email"></label>


</fieldset>
<fieldset><legend>Enquiry</legend>


<label for="findus">
Where did you hear about us?
<select name="findus" id="findus">
<option value="google">Google</option>
<option value="MSN/Bing">MSN / Bing</option>
<option value="yahoo">Yahoo</option>
<option value="friend">Freind</option>
<option value="newspaper">Newspaper</option>
<option value="other">Other</option>
</select></label>
<label for="moreinfo">Enquiry Details<textarea name="moreinfo" id="moreinfo"></textarea></label></fieldset>
<input type="hidden" name="nailed" value="1787783260">
<fieldset><legend>Finish</legend>
<p>If you are happy with your details above please click the send button below</p>
 <input name="send" id="submit" type="button" value="send">
</fieldset>
</form>
</div>
</div></div><br style="clear:both;">

<div id="footer">

Telephone:  Mob:07775 435 872 <br>
Email: <a href="mailto:info@safetayelectricaltesting.co.uk  ">info@safetayelectricaltesting.co.uk  </a><br>
 </div>
</div>
<div style="width:100%; text-align:center; position:relative; margin-top:5px;"> <a href="https://barryswebdesign.co.uk/">Web Designers Dundee</a>
</div>
<script src="js/jquery-latest.js" type="text/javascript"></script>
<script>
$(window).load(function(){
 var imgHeight = $("#uber").height();
 $('.slideshow').css( "height", imgHeight );
 
});


$(function(){
	
	var imgHeight = $("#uber").height();
 $('.slideshow').css( "height", imgHeight );
 
	var count = $(".slideshow").find('img').length;
	
	if (count > 1) {
	
	$('.slideshow img:gt(0)').hide();
	setInterval(function(){$('.slideshow :first-child').fadeOut(2000).next('img').fadeIn(2000).end().appendTo('.slideshow');}, 3000); }
});
</script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.1.css" media="screen">
<script type="text/javascript">
$(document).ready(function() {
$("a.weebo").fancybox({});
});
</script>
<style type="text/css">
#fancybox-left-ico {
 left: 20px;
}
#fancybox-right-ico {
 right: 20px;
 left: auto;
}


</style>
    <script src="js/jquery-latest.js" type="text/javascript"></script>

<script type="text/javascript" src="js/bform.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script>
function initialize() {
  var myLatlng = new google.maps.LatLng(56.538777,-3.372352);
  var mapOptions = {
    zoom: 17,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

</body></html>