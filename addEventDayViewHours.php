<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Calendrier Bouteloup.R</title>
        <BODY BACKGROUND="background.jpg">
    </head>
    <body>

    <!-- Date du jour -->
      <?php
      setlocale(LC_TIME, 'fr_FR.UTF8');
      $DateDuJour = strftime('%A %e %B %Y');
      $DateDuJour = ucfirst($DateDuJour);
      echo "Aujourd'hui : " . $DateDuJour;
      ?>

    	<FORM method=post action="vueJournaliere++.php">

        <table align="center">
          <tbody>

         <?php

        #Ouvre le fichier nommé gestionHonoraire.txt contenant une date
        $monFichierTxt = fopen('gestionHonoraire.txt', 'r+');


        #Récupération des données dans le fichier txt nommé gestionHonoraire.txt
        $jourLettre = fgets($monFichierTxt);
        $numeroJour = fgets($monFichierTxt);
        $moisLettre = fgets($monFichierTxt);

        $nouvelEvenement = "Nouvel événements pour le " . $jourLettre . ' ' . $numeroJour . ' ' . $moisLettre;

        echo '<div class="date_modifier_agenda">' .$nouvelEvenement. '</div>';
        
       
       ?>

          <tr class="truc">
            <br><td> Titre de l'événement </td></br>
            <td> <input type="text" name="titre" style="border:solid 1px grey" size="40"> </td>
          </tr>

          <tr class="truc">
            <td> Commentaires </td>
              <td> <TEXTAREA name="commentaires" rows=5 cols=41></TEXTAREA> </td>
            </tr>

            <tr class="truc">
              <td> Lieu </td>
                <td>
                  <input type="text" name="lieu" style="border:solid 1px grey" size="40"> </td>
                </td>
              </tr>

            <tr class="truc">
            <td> De : </td>
              <td>
                <SELECT name="horaire_de" size="1">
                <OPTION>8 : 00
                <OPTION>9 : 00
                <OPTION>10 : 00
                <OPTION>11 : 00
                <OPTION>12 : 00
                <OPTION>13 : 00
                <OPTION>14 : 00
                <OPTION>15 : 00
                <OPTION>16 : 00
                <OPTION>17 : 00
                <OPTION>18 : 00
                <OPTION>19 : 00
                <OPTION>20 : 00
                <OPTION>21 : 00
                <OPTION>22 : 00
                <OPTION>23 : 00
                </SELECT>
              </td>
            </tr>

            <tr class="truc">
              <td> A : </td>
                <td>
                <SELECT name="horaire_a" size="1">
                <OPTION>8 : 00
                <OPTION>9 : 00
                <OPTION>10 : 00
                <OPTION>11 : 00
                <OPTION>12 : 00
                <OPTION>13 : 00
                <OPTION>14 : 00
                <OPTION>15 : 00
                <OPTION>16 : 00
                <OPTION>17 : 00
                <OPTION>18 : 00
                <OPTION>19 : 00
                <OPTION>20 : 00
                <OPTION>21 : 00
                <OPTION>22 : 00
                <OPTION>23 : 00
                </SELECT>
              </td>
              </tr>
          </tbody>
        </table>
        <br><center><input type = "submit" value = "Ajouter l'événement !"></center></OPTION></br>
      </FORM>

      <?php

      #Récupère l'heure sur lequel l'user à cliqué      
      $heure = $_GET['heure'];
      echo $heure;

      

      ?>
    </body>
</html>