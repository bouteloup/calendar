<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Calendrier Bouteloup.R</title>
    </head>

    <body>

    <?php

    #Fonction faisant en sorte de récupérer les rendez-vous de la BDD de la date du jour
    function recupDataJournalier()
    {


        #Avoir la date sous la forme : 2015-03-23
        $dateActuelleRequeteSQL = date('Y-m-d');
        ?>

        <table align="center">
            <!-- En tête tableau -->
            <thead>
              <tr>
                <th>Horaires</th>
                <th>Titre de l'évènement</th>
                <th>Commentaires</th>
                <th>Lieu</th>
              </tr>
            </thead>

            <!-- Corps du tableau -->
            <tbody>

            <?php


            for ($i = 8; $i < 24; $i++)
            {

                ## Récupère le titre sur la BDD en fonction de i
                $bdd = new PDO('mysql:host=localhost;dbname=calendrier', 'root', 'P@ssword', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $reponse = $bdd->query('SELECT titre FROM informations WHERE horaire="'.$i.'" AND date="'.$dateActuelleRequeteSQL.'"');
                $donnees = $reponse->fetch();

                #Change le background si il y a un rendez-vous
                echo "<tr";
                  if (!empty($donnees))
                  {
                    echo " class=\"colorBackgroundArray\"";
                  }
                  echo ">";
                  ?>


                  <!-- Récupération et affichage données table titre, commentaire, lieu -->
                    <td> <?php echo $i; ?> : 00 </td>
                    <td>
                      <?php
                      echo $donnees['titre'];
                      ?>
                    </td>

                    <td>
                      <?php
                      $bdd = new PDO('mysql:host=localhost;dbname=calendrier', 'root', 'P@ssword', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                      $reponse = $bdd->query('SELECT commentaire FROM informations WHERE horaire="'.$i.'" AND date="'.$dateActuelleRequeteSQL.'"');
                      while ($donnees = $reponse->fetch())
                      {
                        echo $donnees['commentaire'];
                      }
                      ?>
                    </td>

                    <td>
                      <?php
                      $bdd = new PDO('mysql:host=localhost;dbname=calendrier', 'root', 'P@ssword', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                      $reponse = $bdd->query('SELECT lieu FROM informations WHERE horaire="'.$i.'" AND date="'.$dateActuelleRequeteSQL.'"');
                      while ($donnees = $reponse->fetch())
                      {
                        echo $donnees['lieu'];
                      }
                      ?>
                    </td>
                </tr>

            <?php
            }
            ?>

            </tbody>
        </table>

    <?php
    }
    ?>

    </body>
</html>