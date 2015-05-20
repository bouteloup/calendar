<?php
/**
 * @Author: remy
 * @Date:   2015-05-07 20:59:10
 * @Last Modified by:   remy
 * @Last Modified time: 2015-05-20 18:40:28
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Calendrier Bouteloup.R</title>
    </head>

    <body>

    <?php


    function ecrireDateJourPrecedentFichierTxt($JOURDELASEMAINE, $restChiffre, $MOISANNEE, $restMois)
    {
        

        ## --- Effacer le fichier txt pour réécrire les valeurs du jour suivant ---- ###

        ## Exemple : Si dans le fichier txt il est écrit 23 mars 1996, cette fonction va écrire 24 mars 1996
        ## C'est la fonction gestionDate qui a permit de trouver le jour suivant


        #Ouvre le fichier nommé gestionHonoraire.txt contenant une date
        $monFichierTxt = fopen('gestionHonoraire.txt', 'r+');

        #Écrase toutes les données du fichier txt
        ftruncate($monFichierTxt, 0);

        #Écrire dans le fichier txt - Ordre : jourLettre jourChiffre moisLettre. Par exemple : jeudi 23 mars
        fputs($monFichierTxt, $JOURDELASEMAINE);
        fputs($monFichierTxt, "\n");

        fputs($monFichierTxt, $restChiffre);
        fputs($monFichierTxt, "\n");

        #Faire en sorte de voir si le mois de l'année a changé.
        if ($MOISANNEE == 'uneValeurNul')
        {
            fputs($monFichierTxt, $restMois);
        }
        else{
            fputs($monFichierTxt, $MOISANNEE);
        }

        fclose($monFichierTxt);
    }



    function gestionDate()
    {	
        #Récupère l'année actuelle
    	$annee = strftime('%Y');

        #Ouvre le fichier nommé gestionHonoraire.txt contenant une date
        $monFichierTxt = fopen('gestionHonoraire.txt', 'r+');


        #Récupération des données dans le fichier txt nommé gestionHonoraire.txt
        $jourLettre = fgets($monFichierTxt);
        $numeroJour = fgets($monFichierTxt);
        $moisLettre = fgets($monFichierTxt);

        #Supprimer l'espaces des 3 variable ci-dessus
        $restLettre = trim($jourLettre);
        $restChiffre = trim($numeroJour);
        $restMois = trim($moisLettre);


        

        ##################  GESTION JOUR CHIFFRE  #####################
        #Incrémentation du jour en chiffre
        $restChiffre = $restChiffre - 1;



        ##################  GESTION JOUR LETTRE  #####################
        #Faire en sorte de trouver le jour suivant
        $jourDeLaSemaine = array(
        "0" => "Lundi",
        "1" => "Mardi",
        "2" => "Mercredi",
        "3" => "Jeudi",
        "4" => "Vendredi",
        "5" => "Samedi",
        "6" => "Dimanche",
        );

        for ($i = 6; $i >= 0; $i--)
        {
          if ($restLettre == $jourDeLaSemaine["$i"])
          {
            if ($restLettre == $jourDeLaSemaine['0'])
            {
              $i = 6;
              $JOURDELASEMAINE = $jourDeLaSemaine["$i"];
              break;
            }
            $i--;
            $JOURDELASEMAINE = $jourDeLaSemaine["$i"];
          }
        }

        $JOURDELASEMAINE = ucfirst($JOURDELASEMAINE);
        echo '<div class="date">' .$JOURDELASEMAINE. '</div>';


        ##################  GESTION MOIS LETTRE  #####################
        #Déclaration tableau des mois de l'années
        $moisAnnee = array(
        "1" => "janvier",
        "2" => "fevrier",
        "3" => "mars",
        "4" => "avril",
        "5" => "mai",
        "6" => "juin",
        "7" => "juillet",
        "8" => "août",
        "9" => "septembre",
        "10" => "octobre",
        "11" => "novembre",
        "12" => "decembre",
        );

        #Déclaration tableau mois de l'années deux chiffres
        $moisAnneeDeuxChiffres = array(
        "1" => "01",
        "2" => "02",
        "3" => "03",
        "4" => "04",
        "5" => "05",
        "6" => "06",
        "7" => "07",
        "8" => "08",
        "9" => "09",
        "10" => "10",
        "11" => "11",
        "12" => "12",
        );

        $compteur = 0;

        #Faire en sorte de changer le mois et le jour si on passe en dessous de 1
      if ($restChiffre == 0 and $moisLettre == $moisAnnee["1"])
      {
        $restChiffre = 31;
        $compteur = 12;
        $NUMERODUMOIS = "12";
      }
      elseif ($restChiffre == 0 and $moisLettre == $moisAnnee["2"])
      {
        $restChiffre = 31;
        $compteur = 1;
        $NUMERODUMOIS = "01";
      }
      elseif ($restChiffre == 0 and $moisLettre == $moisAnnee["3"])
      {
        $restChiffre = 28;
        $compteur = 2;
        $NUMERODUMOIS = "02";
      }
      elseif ($restChiffre == 0 and $moisLettre == $moisAnnee["4"])
      {
        $restChiffre = 31;
        $compteur = 3;
        $NUMERODUMOIS = "03";
      }
      elseif ($restChiffre == 0 and $moisLettre == $moisAnnee["5"])
      {
        $restChiffre = 30;
        $compteur = 4;
        $NUMERODUMOIS = "04";
      }
      elseif ($restChiffre == 0 and $moisLettre == $moisAnnee["6"])
      {
        $restChiffre = 31;
        $compteur = 5;
        $NUMERODUMOIS = "05";
      }
      elseif ($restChiffre == 0 and $moisLettre == $moisAnnee["7"])
      {
        $restChiffre = 30;
        $compteur = 6;
        $NUMERODUMOIS = "06";
      }
      elseif ($restChiffre == 0 and $moisLettre == $moisAnnee["8"])
      {
        $restChiffre = 31;
        $compteur = 7;
        $NUMERODUMOIS = "07";
      }
      elseif ($restChiffre == 0 and $moisLettre == $moisAnnee["9"])
      {
        $restChiffre = 31;
        $compteur = 8;
        $NUMERODUMOIS = "08";
      }
      elseif ($restChiffre == 0 and $moisLettre == $moisAnnee["10"])
      {
        $restChiffre = 30;
        $compteur = 9;
        $NUMERODUMOIS = "09";
      }
      elseif ($restChiffre == 0 and $moisLettre == $moisAnnee["11"])
      {
        $restChiffre = 31;
        $compteur = 10;
        $NUMERODUMOIS = "10";
      }
      elseif ($restChiffre == 0 and $moisLettre == $moisAnnee["12"])
      {
        $restChiffre = 30;
        $compteur = 11;
        $NUMERODUMOIS = "11";
      }
        
        echo '<div class="date">' .$restChiffre. '</div>';


        #Affiche la variable $restMois si les conditions au dessus retourne false
        if ($compteur == 0)
        {
            echo '<div class="date">' .$restMois. '</div>';
            $MOISANNEE = "uneValeurNul";

            #Trouve les deux lettre du mois par rapport au mois au courant. Ex : mars -> 03
            for ($i = 1; $i <= 12; $i++)
            {
                if ($restMois == $moisAnnee["$i"])
                {
                    $NUMERODUMOIS = $moisAnneeDeuxChiffres["$i"];
                    $moisActuel = $moisAnneeDeuxChiffres["$i"];
                    break;
                }
            }
        }
        else
        {
            echo '<div class="date">' .$moisAnnee["$compteur"]. '</div>';
            $MOISANNEE = $moisAnnee["$compteur"];
        }

        echo '<div class="date">' .$annee. '</div>';

        if ($restChiffre < 10)
        {
            $dateActuelleRequeteSQL = "2015-" . $NUMERODUMOIS . "-0" . $restChiffre;
        }
        else
        {
            $dateActuelleRequeteSQL = "2015-" . $NUMERODUMOIS . "-" . $restChiffre;
        }
        
        #Ferme la session avec le fichier nommé gestionhonoraire.txt
        fclose($monFichierTxt);
        

        #Fonction permettant d'écrire les nouvelles valeurs dans le fichier txt
        ecrireDateJourPrecedentFichierTxt($JOURDELASEMAINE, $restChiffre, $MOISANNEE, $restMois);
        return $dateActuelleRequeteSQL;
    }

    $kevin = $_POST['titre'];
    echo $kevin;

    ?>

    </body>

</html>
