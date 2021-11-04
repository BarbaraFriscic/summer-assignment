
<?php include('header.php'); ?>
<!--HTML -->

<div id="section1Wrap">
      <div class="section1Photo">
        <img src="images/aboutUs.png">
      </div>
          <?php 
          if(isset($_GET['vijestid'])){
            $idOdabranaVijest = $_GET['vijestid'];
          }
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
            //Edit vijest
            if(isset($_POST['spremi'])){
              $nazivVijesti = $_POST['name'];
              $opisVijesti = $_POST['opis'];
              $sql = "UPDATE vijesti SET naziv_vijest='$nazivVijesti', opis_vijest='$opisVijesti' WHERE id_vijest =$idOdabranaVijest";
              if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
              }
            //select vijest
            $sql = "SELECT id_vijest, naziv_vijest, opis_vijest FROM vijesti WHERE id_vijest = $idOdabranaVijest";
            $result = $conn->query($sql);
            $vijest = $result->fetch_assoc();
            $conn->close();
           ?>
      <div class="section1Text">
        <h1><?php echo $vijest['naziv_vijest']; ?></h1>
        <p><?php echo $vijest['opis_vijest']; ?></p>
        <a href="index.php" style="border: solid 1px #ffffff;">Home Page</a>
      </div>
      <div style="clear: both;"></div>
</div> <!-- end #section1Wrap -->
<div id="formWrap">
  <h1>Uredi vijest</h1>
  <div style="clear: both;"></div>
  <div id="formContainer">
    <form id="forma" method="post" action="">
      <div id="formElement">
        <label style="color: #3a3838; font-weight: 400;font-size: 20px; line-height: 20px;" for="name">Naziv vijesti</label>
        <br>
        <input id="name" type="text" name="name" value="<?php echo $vijest['naziv_vijest']; ?>" onfocus="if(this.value != '') this.value = ''">
      </div>
      <div id="formElement">
        <label style="color: #3a3838; font-weight: 400;font-size: 20px; line-height: 20px;" for="opis">Opis Vijesti</label>
        <br>
        <textarea id="opis" name="opis" placeholder="<?php echo $vijest['opis_vijest']; ?>"></textarea>
      </div>
      <div id="formElement">
        <input type="submit" name="spremi" id="spremi" value="Uredi">
      </div>
    </form>
  </div>
  <div style="clear: both;"></div>
</div> <!-- end #formWrap-->
<div style="background-color: #282e40; padding-top: 1px;"> <!-- Ovo je zato što drugačije boja pozadine nije bila prikazana -->
<div id="footer">
  <div id="footerSection" >
    <h1>Contact Us</h1>
    <ul>
      <li><p>Healing Center, 176 W Street name, New York, NY</p></li>
      <li><p>(+91) 987 654 3210</p></li>
      <li><p>demo@gmail.com</p></li>
    </ul>
  </div>
  <div id="footerSection">
    <h1>Pages</h1>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Fruits</a></li>
      <li><a href="#">News</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  </div>
  <div id="footerSection">
    <h1>Recent Post</h1>
    <ul class="footerSectionPosts">
      <li><img src="images/footer1.png"><p>consectetur adipisc elit,<br>
      sed do eiusmod</p></li>
      <li><img src="images/footer2.png"><p>consectetur adipisc elit,<br>
      sed do eiusmod</p></li>
      <li><img src="images/footer3.png"><p>consectetur adipisc elit,<br>
      sed do eiusmod</p></li>
    </ul>
  </div>
  <div id="footerSection" class="boxLastItem">
    <h1>Newsletter</h1>
    <form id="newsletter">
      <div id="formElement"><input id="email" type="email" name="email" placeholder="Enter Your Email" required></div>
      <div id="formElement"><input type="submit" name="send" id="send" value="Subscribe"></div>
    </form>
  </div>
</div> <!-- end #footer-->
  <div style="clear: both;"></div>
<div id="footerBanner">
    <p>Edunova W29 August 2021</p>
  </div>
  <div style="clear: both;"></div>
</div>
</body>
</html>