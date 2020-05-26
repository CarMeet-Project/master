<?php include("View/standard_content/header.php"); ?>

<?php
   $CalendarMonthOne = new Calendar(5,2020);
   $CalendarMonthTwo = new Calendar(6,2020);
   $CalendarMonthThree = new Calendar(7,2020);
   $CalendarMonthFour = new Calendar(8,2020);
   $CalendarMonthFive = new Calendar(9,2020);
   $CalendarMonthSix = new Calendar(10,2020);
?>
<div class="Calendars">
<?php
   $CalendarMonthOne->show();
   $CalendarMonthTwo->show();
   $CalendarMonthThree->show();
   $CalendarMonthFour->show();
   $CalendarMonthFive->show();
   $CalendarMonthSix->show();
 ?>
 </div>
<?php include("view/standard_content/footer.php"); ?>
