<?php
// Possibilité 1
    // Retourne une date sous forme d'une chaîne, au format donné par le paramètre format, fournie par le paramètre timestamp ou la date et l'heure courantes si aucun timestamp n'est fourni. En d'autres termes, le paramètre timestamp est optionnel et vaut par défaut la valeur de la fonction time().
    $date_slash = date('d/m/Y'); // ex 1
    $date_dash = date('d-m-Y');    // ex 2

    // Possibilité 2
    $date_slash_2 = new DateTime(); // ex 1
    $date_dash_2 = new DateTime();    // ex 2

    // Possibilité 3
    $date_slash_3 = date_create(); // ex 1
    $date_dash_3 = date_create(); // ex 2
?>
<h1>Exercice 1</h1>
    <div>Date du jour (methode date()): <strong><?= $date_slash; ?></strong></div>
    <div>Date du jour (methode DateTime()) : <strong><?= $date_dash_2 -> format('d/m/Y'); ?></strong></div>
    <div>Date du jour (methode date_create()) : <strong><?= date_format($date_slash_3, 'd/m/Y'); ?></strong></div>



    <?php
// ---------------------------- bonus ----------------------------
    function dateFR($date){
        // récupère le numéro de jour de la semaine
        $dayNumber = date_format($date, 'w');
        // récupère le numéro du mois
        $monthNumber = date_format($date, 'n');
        $dayList = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
        $monthList = array(1 => 'Janvier', 2 => 'Fevrier', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août', 9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre');
        $day = $dayList[$dayNumber];
        $month = $monthList[$monthNumber];
        // incrémente le jour prélevé du tableau, le numéro de date, le mois prélevé dans le tableau et l'année à 4 chiffre
        $date = $day." ".date_format($date, 'd').' '.$month.' '.date_format($date, 'Y');
        return $date;
    }

// ------------------- Exercice 3 et bonus -------------------------

    // setlocale function PHP
    /* Configure le script en Français */
    setlocale(LC_ALL, 'fr_FR.UTF-8', 'fra', 'fr');
    // date en toutes lettres
    $date_letters = date_create();
    $date_traduite = dateFR($date_letters);
?>

<h1>Exercice 3</h1>
    <div>Date du jour (en lettre, date_format()) : <strong><?= date_format($date_letters, 'l d F Y'); ?></strong></div>
    <!-- autre méthode -->
    <div>Date du jour (en lettre, date()) : <strong><?= date('l d F Y'); ?></strong></div>
    <!-- Bonus -->
    <div>Date traduite (strftime) : <strong><?= strftime("%A %e %B %Y", time()); ?></strong></div>
    <div>Date traduite : <strong><?= $date_traduite ?></strong></div>