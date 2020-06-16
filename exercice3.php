<!--Exercice 3 Variable-->
<?php
    $title = 'Exercice 3';
    include 'header.php';
    
?>

<h1>Exercice 3</h1>

<?php 
    $date1 = date('Y-m-d'); // Date du jour
    setlocale(LC_TIME, "fr_FR", "French");?>
    <p>Nous sommes le <?php echo strftime("%A %d %B %G", strtotime($date1)); ?></p>


<?php 
    include 'footer.php';
?>