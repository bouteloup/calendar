<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Calendrier Bouteloup.R</title>
    </head>

    <body>

    <?php

    function dateActuelle()
    {	
    	#Récupère la date actuelle
        $jourLettre = strftime('%A');
        $numJour = strftime('%e');
        $mois = strftime('%B');
        $annee = strftime('%Y');

        $jourLettre = ucfirst($jourLettre);

        echo '<div class="date">' .$jourLettre. '</div>'; 
        echo '<div class="date">' .$numJour. '</div>';
        echo '<div class="date">' .$mois. '</div>';
        echo '<div class="date">' .$annee. '</div>';
 

        #Ouvre le fichier nommé gestionHonoraire.txt contenant une date
        $monFichierTxt = fopen('gestionHonoraire.txt', 'r+');

        #Écrase toutes les données du fichier txt
        ftruncate($monFichierTxt, 0);


        #Écrire dans le fichier txt - Ordre : jourLettre jourChiffre moisLettre. Par exemple : jeudi 23 mars
        fputs($monFichierTxt, $jourLettre);
        fputs($monFichierTxt, "\n");

        fputs($monFichierTxt, $numJour);
        fputs($monFichierTxt, "\n");

        fputs($monFichierTxt, $mois);


        #Ferme la session avec le fichier nommé gestionhonoraire.txt
        fclose($monFichierTxt);
    }

    ?>

    </body>

</html>
