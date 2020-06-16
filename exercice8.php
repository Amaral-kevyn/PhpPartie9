<!--Exercice 8 Variable-->
<?php 
     $title = 'Exercice 8';
     include 'header.php';
?>

<?php

$jour = date('d/m/Y');?> <!-- Notre date d'aujourdui-->
<p>Dans 22 jours nous sommes le  <?php echo date('d/m/Y', strtotime(' - 22 days')); ?> <!-- </p> // On ajoute 22 jours -->

<?php
    include 'footer.php';
?>