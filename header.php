<!DOCTYPE html>
<html>
<head>
    <title>Ljetni zadatak</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="flexslider/flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="flexslider/jquery.flexslider.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>var $j = jQuery.noConflict(true);</script>
    <script>
      $(document).ready(function(){
       console.log($().jquery); // This prints v1.6.2
       console.log($j().jquery); // This prints v1.12.1
      });
   </script>
<script type="text/javascript" charset="utf-8">
  		$(window).load(function() {
    	$(".flexslider").flexslider();
  	});
</script>
  <script type="text/javascript">
$( document ).ready(function() {
    $j( "#tabs" ).tabs({
      event: "mouseover"
    });
});
	</script>

</head>
<body>
    <div id="topBarWrap">
    		<div id="topBarLogo">
    			<img style="background-size: cover;" src="images/logo.png">
    		</div>
    		<div id="topBarNav">
    			<ul class="mainNav">
    				<li><a href="#">Home</a></li>
    				<li><a href="#">About Us</a></li>
    				<li><a href="#">Fruits</a>
    						<ul>
    							<li><a href="#">Apples</a></li>
    							<li><a href="#">Black Grapes</a></li>
    							<li><a href="#">Pineapples</a></li>
    							<li><a href="#">Bananas</a></li>
    							<li><a href="#">Lemons</a></li>
    							<li><a href="#">Berries</a></li>
    						</ul>
    				</li>
    				<li><a href="#">News</a></li>
    				<li><a href="#">Contact Us</a></li>
    			</ul>
    		</div>
    		<div style="clear: both;"></div>
    </div> <!-- end #topBarWrap -->
    <div id="flexsliderWrap">
      <div id="headerBox">
        <h1>Best</h1>
        <h2>Fresh Fruits</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labord do eiusmod</p>
        <a href="#">Buy Now</a>
      </div>
      <div class="flexslider">
        <ul class="slides">
          <li><img src="images/apples.jpg" /></li>
          <li><img src="images/blackGrapes.jpg" /></li>
          <li><img src="images/pineapples.jpg" /></li>
          <li><img src="images/bananas.jpg" /></li>
          <li><img src="images/lemons.jpg" /></li>
          <li><img src="images/berries.jpg" /></li>
        </ul>
    </div>
    <div style="clear: both;"></div>
    </div> <!-- end #flexsliderWrap -->