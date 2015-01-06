<?php $page = "Home"; ?>

<!-- Includes Head -->
  <?php include_once "head.php"; ?>

  <?php

  // displays spalsh page if cookie is not set
  if (!isset($_COOKIE["visited"])){
    include_once "splash.php";
    // sets cookie and spalsh is no longer displayed
    setcookie("visited", TRUE, time() + 84600, "/");
  }

  ?>

    <div class="container">
      <!-- slide begins-->
      <div class="slider">
        <div class="sliderimages one-time">
          <div><img src="images/image1.jpeg" /></div>
          <div><img src="images/image3.jpg" /></div>
          <div><img src="images/image2.jpg" /></div>
          <div><img src="images/image4.jpg" /></div>
        </div>
      </div>

      <div class="intro">
        <div>
          <h3>WELCOME TO BRP</h3>
          <p>Welcome to BRPtraining. My name is Bryon Rizzi, founder and consultant. Fitness or "muscle movement" and Sports Specific coaching is a passion I have taken head on since I started this journey at the age of 13. Playing high school sports and being fortunate to earn a scholarship to the University of Findlay to play college football as well as study Strength and Conditioning is where the real world in fitness training and coaching started to become clear.<a href="contact.php"><b style="color:#FF0066;">  BELIEVE II ACHIEVE</b></a></p>
          <p>Book you're first time session.</p>
          <a href="#" class="introbutton">BOOK NOW</a><br>
        </div>
      </div>

      <!-- line break -->
      <div class="contentbreakline">
        <div>
          <hr>
        </div>
      </div>
      <!-- line break ends-->

      <div class="aboutsection">
        <div class="about">
          <h4>ABOUT BRP</h4>
          <div class="aboutimg">
            <img src="images/bryon.jpeg"/>
          </div>
        </div>
        <div class="aboutlist">
          <p>&ndash; Nutritional Advice</p>
          <p>&ndash; Muscle Toning</p>
          <p>&ndash; Strength and Conditioning</p>
          <p>&ndash; 1 on 1 Consulting</p>
          <p>&ndash; Program Design</p>
          <p>&ndash; Sports Specific Training</p>
          <p>&ndash; NFL Combine Training</p>
        </div>
      </div>

      <div class="aboutbrp">
        <div class="abouttext">
           <p>BRP training is a fitness and consulting company driven by results! Each client under our supervision will get state-­‐of-­‐the-­‐art professional training and consulting aimed to exceed achieving your fitness goals. Backed by science with injury preventative methods, we’re proven to take the body mentally and physically to the next level. For the last 6 plus years, BRP training has helped clients do everything including, losing weight, gaining muscle, increase speed, increase vertical jump, significantly increased strength gain, dropped body fat and assistance with individual lifestyle habits to instill a positive way of living and staying fit.  </p>
        </div>
      </div>
      
      <!-- line break -->
      <div class="contentbreakline">
        <div>
          <hr>
        </div>
      </div>
      <!-- line break ends-->

      <div class="socialsection">
        <div class="vidsection">
          <h4>VIDEOS</h4>
          <div class="workoutvid">
            <iframe width="560" height="315" src="//www.youtube.com/embed/G6-Mbr5W2aQ?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="socialcontact">
          <h4>CONTACT BRP</h4>
          <p style="margin-left: 0px;">Miami, FL 33132<br><a href="mailto:BRPtraining@yahoo.com" style="color:#FF0033;">BRPtraining@yahoo.com</a><br>Tel: 904-377-0918</p>
          <a href="https://www.facebook.com/pages/BRPTraining/206960129493944?sk=info&ref=page_internal" ><img src="images/fb.png"></a>
          <a href="https://twitter.com/B_rizzi21" ><img src="images/tw.png"></a>
          <a href="http://instagram.com/b_rizzi" ><img src="images/ig.png"></a>
        </div>        
      </div>
  
  </div>

<!-- Includes Foot -->
<?php include_once "footer.php"; ?>