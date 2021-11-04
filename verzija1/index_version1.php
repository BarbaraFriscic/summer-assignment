<?php include('header.php'); ?>
<!-- start Jquery validation -->
<script src="jquery-validation/jquery.validate.js"></script>
<script src="jquery-validation/jquery.js"></script>
<script>
    $("forma").validate();
</script>
<script>
    $("newsletter").validate();
</script><!-- end Jquery validation -->
<!-- start submit data and email -->
<?php
if(isset($_GET['send'])){
  //echo '<pre>';
  //print_r($_POST);
  //echo '</pre>';
  $name = $_GET['name'];
  $email = $_GET['email'];
  $phone = $_GET['phone'];
  $message = $_GET['message'];
 }
?>
<?php 
    if(isset($_GET['send'])){
    //Ispis podataka u datoteku
    $mojaDatoteka = fopen("inc/mojipodaci.txt", "w") or die("Unable to open file!");
    $unos = "Vaše ime je: ".$name." - ".$email." - ".$phone."\n".$message;
        fwrite($mojaDatoteka, $unos);
        fclose($mojaDatoteka);
    //Slanje podataka na email
    $to = "barbarafriscic93@gmail.com,".$email;
    $poruka= $name." Thank you for contacting us. "."\n";
    $poruka.= "We received this message and will be contacting you as soon as possible."."\n".$message."\n";
    mail($to,"Request for information",$poruka);
   }
?><!-- end submit data and email -->
<!--HTML -->
<div id="section1Wrap">
      <div class="section1Photo">
        <img src="images/aboutUs.png">
      </div>
      <div class="section1Text">
        <h1>About our shop</h1>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#">Read More</a>
      </div>
      <div style="clear: both;"></div>
    </div> <!-- end #section1Wrap -->
<div id="section2Wrap">
	<div class="section2Title">
    <h1>Our Fruits</h1>
</div>
    	<!-- počinje #tabs -->
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Best Sellers</a></li>
    <li><a href="#tabs-2">Yellow Fruit</a></li>
    <li><a href="#tabs-3">Berries</a></li>
  </ul>
    <div id="tabs-1">
      <ul class="tabsBox">
       <li class="tabsBoxItem"><img src="images/redApple.jpg"></li>
        <li class="tabsBoxItem"><img src="images/greenApple.jpg"></li>
        <li class="tabsBoxItem"><img class="boxLastItem" src="images/blackGrapes2.jpg"></li>
      </ul>
       <div style="clear: both;"></div>
      <ul class="tabsBox">
        <li class="tabsBoxItem2"><h1>Red Apples</h1><p>Fresh Fruit</p></li>
        <li class="tabsBoxItem2"><h1>Green Apples</h1><p>Fresh Fruit</p></li>
        <li class="tabsBoxItem2 boxLastItem"><h1>Black Grapes</h1><p>Fresh Fruit</p></li>
      </ul>
    </div>
    <div id="tabs-2">
      <ul class="tabsBox">
        <li class="tabsBoxItem"><img src="images/pineapple.jpg"></li>
        <li class="tabsBoxItem"><img src="images/banana1.jpg"></li>
        <li class="tabsBoxItem"><img class="boxLastItem" src="images/lemon2.jpg"></li>
      </ul>
        <div style="clear: both;"></div>
      <ul class="tabsBox">
        <li class="tabsBoxItem2"><h1>Pineapples</h1><p>Fresh Fruit</p></li>
        <li class="tabsBoxItem2"><h1>Bananas</h1><p>Fresh Fruit</p></li>
        <li class="tabsBoxItem2 boxLastItem"><h1>Lemons</h1><p>Fresh Fruit</p></li>
      </ul>
    </div>
    <div id="tabs-3" >
      <ul class="tabsBox">
        <li class="tabsBoxItem"><img src="images/strawberries.jpg"></li>
        <li class="tabsBoxItem"><img src="images/blueberries.jpg"></li>
        <li class="tabsBoxItem"><img class="boxLastItem"
        src="images/raspberries.jpg"></li>
      </ul>
        <div style="clear: both;"></div>
      <ul class="tabsBox">
        <li class="tabsBoxItem2"><h1>Strawberries</h1><p>Fresh Fruit</p></li>
        <li class="tabsBoxItem2"><h1>Blueberries</h1><p>Fresh Fruit</p></li>
        <li class="tabsBoxItem2 boxLastItem"><h1>Raspberries</h1><p>Fresh Fruit</p></li>
      </ul>
    </div> 
      <div style="clear: both;"></div>
</div> <!-- end #tabs -->
<div id="topProduct">
  <div class="topProductBox">
    <h1>Fresh Lemon</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing el sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure doloreprehenderin</p>
    <a href="#">Read More</a>
  </div>
  <div style="clear: both;"></div>
</div> <!-- end #topProduct -->
<div id="news">
  <h1>News</h1>
  <div class="newsSection">
    <img src="images/vijest1.jpg">
    </div>
    <div class="newsSection">
    <img src="images/vijest2.jpg">
    </div>
    <div class="newsSection boxLastItem">
    <img src="images/vijest3.jpg">
    </div>
<?php
        //select vijesti
        $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "ljeto2021";
            // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
              if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
              }

        $sql = "SELECT id_vijest, naziv_vijest, opis_vijest FROM vijesti OF";
        $result = $conn->query($sql);
        $i = 1;
        while($row = $result->fetch_assoc()):
          //echo '<pre>';
          //print_r($row);
          //echo '</pre>';
       ?>
       <div class="newsSection <?php if($i%3==0) echo'boxLastItem'; ?>">
        <h2><?php echo $row['naziv_vijest']; ?></h2>
        <p><?php echo $row['opis_vijest']; ?></p>
        <a href="vijest.php?vijestid=<?php echo $row['id_vijest']; ?>">Read More</a>
      </div>
      <?php 
        $i++; endwhile;
        $conn->close();
       ?>

  <!-- <div class="newsSection">
    <img src="images/vijest1.jpg">
    <h2>News 1</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniadolor..</p>
    <a href="vijest.php">Read More</a>
  </div>
  <div class="newsSection">
    <img src="images/vijest2.jpg">
    <h2>News 2</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniadolor..</p>
    <a href="vijest.php">Read More</a>
  </div>
  <div class="newsSection boxLastItem">
    <img src="images/vijest3.jpg">
    <h2>News 3</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniadolor..</p>
    <a href="vijest.php">Read More</a>
  </div> -->
  <div style="clear: both;"></div>
</div> <!-- end #news--> 
<div id="formWrap">
  <h1>Request a <span style="color: #12c6f4; font-weight: 800;">Call Back</span></h1>
  <div style="clear: both;"></div>
  <div id="formContainer">
    <form id="forma" method="get" action="">
      <div id="formElement"><input id="name" type="text" name="name" placeholder="Your Name" minlength="2" required></div>
     <div id="formElement"><input id="email" type="email" name="email" placeholder="Email" required></div>
      <div id="formElement"><input id="phone" type="text" name="phone" placeholder="Phone"></div>
      <div id="formElement"><textarea id="message" name="message" placeholder="Message" required></textarea></div>
      <div id="formElement"><input type="submit" name="send" id="send" value="Send"></div>
    </form>
  </div>
  <div style="clear: both;"></div>
</div> <!-- end #formWrap-->
<?php include('footer.php'); ?>