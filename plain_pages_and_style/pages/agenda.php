<?php  include("../includes/header.php") ?>


<?php
   $CalendarMonthOne = new Calendar(5,2020);
   $CalendarMonthTwo = new Calendar(6,2020);
   $CalendarMonthThree = new Calendar(7,2020);
   $CalendarMonthFour = new Calendar(8,2020);
   $CalendarMonthFive = new Calendar(9,2020);
   $CalendarMonthSix = new Calendar(10,2020);
?>
<div class="container">
    <div class="main">
        <?php
           $CalendarMonthOne->show();
           $CalendarMonthTwo->show();
           $CalendarMonthThree->show();
           $CalendarMonthFour->show();
           $CalendarMonthFive->show();
           $CalendarMonthSix->show();
         ?>
    </div>
</div>
