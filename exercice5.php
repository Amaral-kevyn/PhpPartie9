<!--Exercice 5 Variable-->
<?php 
     $title = 'Exercice 5';
     include 'header.php';
     
    $debut = strtotime('2016-05-16');
    $fin = strtotime('2020-06-10');
    $dif = (abs($fin - $debut) / 86400);
?>

      
<?php echo $dif;
    
    include 'footer.php';
?>