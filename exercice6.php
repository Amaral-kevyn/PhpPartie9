<!--Exercice 6 Variable-->
<?php 
     $title = 'Exercice 6';
     include 'header.php';
?>

<?php
$d=cal_days_in_month(CAL_GREGORIAN,02,2016);
echo $d;

   
    include 'footer.php';
?>