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


      <FORM action="vueJournaliere.php" method=post>
        <input type="submit" value="Vue journalière">
      </FORM>



      <!-- Image flèche gauche -->
      <a class="fleches_gauche" href="vueJournaliere--.php" ><img src="gauche.jpg"/></a>


      <!-- GESTION HONORAIRE AFFICHAGE SEULEMENT -->
      <!-- Gestion date calendrier entre les deux flèches -->
      <?php
      include("honoraire.php");
      dateActuelle();
      ?>


      <!-- Image flèche droite -->
      <a class="fleches_droite" href="vueJournaliere++.php" ><img src="droite.jpg"/></a><br></br>


      <FORM action="addEventDayViewHours.php" method=post>
        <input class="bouton_modifier_agenda" type="submit" value="Modifier l'agenda">
      </FORM>

      <FORM action="addEventDayViewHours.php" method=post>
        <input class="bouton_ajouter_une_entree" type="submit" value="Ajouter une entrée">
      </FORM>

       <?php
      #Fonction faisant en sorte de récupérer les rendez-vous de la BDD de la date du jour
      include("mysqlJournalier.php");
      recupDataJournalier();
      ?>

        <!-- Formulaire VueSemaine -->
        <FORM action="vueSemaine.php" method=post>
          <br></br> <input type="submit" value="Vue Semaine ici"> <br></br>
        </FORM>

    </body>
</html>