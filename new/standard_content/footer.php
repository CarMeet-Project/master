<body>
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
        <li><a href="./index.php?action=welcome">Welcome</a></li>
        <li><a href="./index.php?action=agenda">Agenda</a></li>
        <li><a href="./index.php?action=aboutUs">About Us</a></li>
        <li><a href="./index.php?action=contact">Contact</a></li>

        <!-- if loggedin -->
        <?php if ((isset($_SESSION['loggedin'])) && ($_SESSION["loggedin"] == "TRUE")) { ?>
          
        <li><a href="./index.php?action=logout">Uitloggen</a></li>

        <?php } else { ?>
        
        <li><a href="./index.php?action=login">Inloggen</a></li>
        
        <?php } ?>
        </ul>
      </div>
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
     <a href="#">SmoothRoadCode</a>.
        </p>
      </div>
    </div>
    <hr>
  </div>
</footer>

</body>
</html>
