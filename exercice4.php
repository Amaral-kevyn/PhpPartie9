<!--Exercice 4 Variable-->
<?php 
    $title = 'Exercice 4';
    include 'header.php';
    
    $t1 = mktime(15, 0, 0, 8, 2, 2016);
?>

<h1>Exercice 4</h1>
<p> <?php echo 'Timestamp actuel : ' .time();?><!-- Affiche la timeline du jour -->  </p>
<p> <?php echo 'Timestamp du  mardi 2 août 2016 à 15h00 : ' .$t1; ?> </p> <!-- Affiche la timeline du 02/08/2016 --> 

<?php
    include 'footer.php';
?>