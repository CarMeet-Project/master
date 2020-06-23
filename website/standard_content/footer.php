<!-- Site footer -->
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h6>About</h6>
        <p class="text-justify">SmoothRoadCode <i> <br>
         SmoothRoadCode is gespecialiseerd in het creeren van websites. <br>
         Ons bedrijf is gevestigd in Nieuwegein & bestaat sinds 2020. <br>
         Dit project is bevestigd in verband met passie en liefde tegenover auto`s. </p>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Quick Links</h6>
        <ul class="footer-links">
          <li><a href="./index.php?action=welcome">Home</a></li>
          <li><a href="./index.php?action=agenda">Agenda</a></li>
          <li><a href="./index.php?action=contact">Contact</a></li>
          <li><a href="./index.php?action=aboutUs">OverOns</a></li>
          <?php if ((isset($_SESSION['admin-loggedin'])) && ($_SESSION["admin-loggedin"] == "TRUE")) { ?>
          <li><a href="./index.php?action=logout">Uitloggen</a></li>
          <?php } else { ?>
          <li><a href="./index.php?action=login">Inloggen</a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
     <a href="#">SmoothRoadCode</a>.
        </p>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/hoi.smoothroadcode.1" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="https://twitter.com/road_smooth" target="_blank"><i class="fa fa-twitter"></i></a></li>
            </ul>
      </div>
    </div>
  </div>
</footer>
  
</body>
</html>