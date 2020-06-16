
<!--Exercice TP Variable-->
<?php 
     $title = 'tp';
     include 'header.php';

?>

<h1>Calendrier TP</h1>

<form method='POST'>

<p><strong>Choisissez le mois</strong></p>
<select name="month">
<?php

$month =[
    '1' => 'Janvier',
    '2' => 'Fevrier',
    '3' => 'Mars',
    '4' => 'Avril',
    '5' => 'Mai',
    '6' => 'Juin',
    '7' => 'Juillet',
    '8' => 'Aout',
    '9' => 'Septembre',
    '10' => 'Octobre',
    '11' => 'Novembre',
    '12' => 'Décembre',
];

foreach ($month as $key => $value) {
    echo '<option value="'.$key.'">'.$value.'</option>';
}
?>

</select>

<p><strong>Choisissez l'année</strong></p>
<select name="years">
<?php
for ($a = 1950; $a <= 2020; $a++)
{ 
    echo '<option value="'.$a.'">'.$a.'</option>'; 
}
?>
</select>

<input class='ml-5' type="submit" id='submit' name='LOGIN' >

<?php
if((isset($_POST['years']))&&(isset($_POST['month']))){?>
    <p class='text-right h1'><?php echo $_POST['years']." ".$_POST['month']; ?></p>
    <?php $d = cal_days_in_month(CAL_GREGORIAN,$_POST['month'],$_POST['years']);
 ?> 
<?php }
?>
<table class= 'table table-bordered table-striped'>
<thead>
    <tr>
        <th class='bg-secondary'><?php echo 'Lundi' ?></th>
        <th class='bg-secondary'><?php echo 'Mardi' ?></th>
        <th class='bg-secondary'><?php echo 'Mercredi' ?></th>
        <th class='bg-secondary'><?php echo 'Jeudi' ?></th>
        <th class='bg-secondary'><?php echo 'Vendredi' ?></th>
        <th class='bg-secondary'><?php echo 'Samedi' ?></th>
        <th class='bg-secondary'><?php echo 'dimanche' ?></th>
    </tr>
</thead>
<tbody>
  <tr>
        
            <?php for ($i = 1; $i <= $d ; $i ++) {  ?>
               <?php if ($i <= 7 ){
                    echo '<td>'.$i.'</td>';
                }  ?> 
           <?php  }
            ?>
    </tr>
  <tr>
        
            <?php for ($i = 8; $i <= $d ; $i ++) {  ?>
               <?php if ($i <= 14 ){
                    echo '<td>'.$i.'</td>';
                }  ?> 
           <?php  }
            ?>
    </tr>
  <tr>
        
            <?php for ($i = 15; $i <= $d ; $i ++) {  ?>
               <?php if ($i <= 21 ){
                    echo '<td>'.$i.'</td>';
                }  ?> 
           <?php  }
            ?>
    </tr>
  <tr>
        
            <?php for ($i = 22; $i <= $d ; $i ++) {  ?>
               <?php if ($i <= $d && $i <= 28 ){
                    echo '<td>'.$i.'</td>';
                }  ?> 
           <?php  }
            ?>
    </tr>
    <tr>  <?php for ($i = 28; $i <= $d ; $i ++) {  ?>
               <?php if ($i <= $d && $i >= 28 ){
                    echo '<td>'.$i.'</td>';
                }  ?> 
           <?php  } ?>
    </tr>
    
  
</tbody>
</table> 

</form>



<?php
    include 'footer.php';
?>