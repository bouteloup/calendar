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

      <!-- Définition des variables de temps -->
      <?php
      $annee = strftime('%Y');
      ?>

      <!-- Image flèche gauche -->
      <a class="fleches_gauche" href="vueJournaliere--.php" ><img src="gauche.jpg"/></a>


      <?php
      #Traitement affichage date précédente
      include('honoraire--.php');
      $datePourSQL = gestionDate();
      
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
      #Traitement affichage du tableau en fonction de la date choisit
      include('mysqlJournalier++.php');
      recupDataPlus($datePourSQL);
      ?>

        <!-- Formulaire VueSemaine -->
        <FORM action="vueSemaine.php" method=post>
          <br></br> <input type="submit" value="Vue Semaine ici"> <br></br>
        </FORM>

    </body>
</html>
