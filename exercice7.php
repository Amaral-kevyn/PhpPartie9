<!--Exercice 7 Variable-->
<?php 
     $title = 'Exercice 7';
     include 'header.php';
?>

<?php

$jour = date('d/m/Y');?> <!-- Notre date d'aujourdui-->
<p> Dans 20 jours nous sommes le  <?php echo date('d/m/Y', strtotime(' + 20 days')); ?> <!-- </p> // On ajoute 20 jours -->

<?php
    include 'footer.php';
?>