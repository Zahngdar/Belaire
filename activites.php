<?php
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'>
    <!-- css des frameworks -->
    <link rel ="stylesheet" href="../css/bootstrap.css">
    <link rel ="stylesheet" href="css/style.css">
    <link rel ="stylesheet" href="../css/bootstrap-theme.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
     <!-- un theme css plutot flat -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/united/bootstrap.min.css" rel="stylesheet" integrity="sha256-oqtj+Pkh1c3dgdH6V9qoS7qwhOy2UZfyVK0qGLa9dCc= sha512-izanB/WZ07hzSPmLkdq82m5xS7EH/qDMgl5aWR37EII+rJOi5c6ouJ3PYnrw6K+DWQcnMZ+nO1NqDr6SBKLBDg==" crossorigin="anonymous">

    <!-- theme optinem -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- framework JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top" style="margin-top:-50px;height:51px">
      <div class="container">
        <a class="navbar-brand"> Belaire</a>
          <button class="navbar-toggle" data-target="#navbar-main" data-toggle="collapse" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar-main" class="navbar-collapse navbar" style="background-color:#996600;">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php"><h1 id="titre"> Bel-Air</h1> </br>

            </div>

            <ul class="nav navbar-nav">
              <li><a href=index.php>Accueil</a></li>
              <li><a href=#>Chambres</a></li>
              <li><a href=activites.php>Activités</a></li>
              <li><a href=#>Actualité</a></li>
              <li><a href=contact.php>Contact</a></li>
              <li><a href=#>English website</a></li>
            </ul>
          </div>
      </div>
    </div>


    <center>
      <div style="margin-top:75px; ">
        <h1>Les Activités</h1>
      </div>

    <style>
      .activite {
        width: 95%;
        border-radius: 20px;
      }
    </style>

      <img src="images/voyage-a-nantes-018-275x200.jpg"/>
      <img src="images/voyage-à-nantes-0341-275x200.jpg"/>
      <img src="images/la-loire-0151-275x200.jpg"/>
      <style>
        tr td {
          padding: 4px;
        }
      </style>
    <table style="width:60%">
      <tr>
        <td colspan="2">
          <div class="jumbotron activite">
            <p>
              <table>
                <tr>
                  <td>
                    <img src="images/leisure-372523__180-180x150.jpg"/>
                  </td>
                  <td><h3>Balades et randonnées</h3>
                    Mauves sur Loire et les communes environnantes offrent de nombreuses possibilités de promenades et randonnées.
L’occasion de découvrir le paysage ligérien à pied ou à vélo !
<br/>Découvrez les sentiers de Mauves sur Loire et les 23 petits voyages de Nantes Métropole.
Et ne manquez pas le fabuleux itinéraire de la Loire à vélo.
                  </td>
                </tr>
              </table>
            </p>
              <div style="padding: 6px">Nantes la métropole qui aime le vélo !<br/>
Nantes est élu 5ème ville Vélo Friendly du monde.<br/>
En 2015, la ville accueille le Congrès Vélo City 2015 et devient la Capitale du Vélo.<br/>
La ville est au croisement de deux Euroveloroute : Euro vélo n°6 (La Loire à Vélo) et Eurovélo n°1 (La Vélodyssé). Deux itinéraires majeurs du cyclotourisme.
485 km d’itinéraires cyclables sont à parcourir au cœur de la métropole nantaise.
29 œuvres de la collection Estuaire sont à découvrir le long des parcours cycliste.<br/><br/>
Bonne balade !</div>
          </div>


          <div class="jumbotron activite">
            <p>
              <table>
                <tr>
                  <td>
                    <img src="images/la-luce-champtoceaux-004-180x150.jpg"/>
                  </td>
                  <td><h3>Croisières sur la Loire.</h3>
                    Rien de tel qu’une balade en bateau pour avoir un autre regard sur la Loire.<br/>
Une petite balade fluviale à bord de La Luce vous donne une autre vision du fleuve en se laissant bercer par les flots : vous plongez illico au cœur de l’histoire et du patrimoine de la région.
                  </td>
                </tr>
              </table>
            </p>
              <div style="padding: 6px">L’embarcadère de La Luce à Champtoceaux est à seulement un quart d’heure de Bel Air.<br/>
Promenez-vous également à bord des Balades du pêcheur, au départ de Saint Julien de Concelles.</div>
          </div>


          <div class="jumbotron activite">
            <p>
              <table>
                <tr>
                  <td>
                    <img src="images/voyage-a-nantes-004-180x150.jpg"/>
                  </td>
                  <td><h3>Visite de Nantes</h3>
                    A 20 minutes de Mauves en voiture et à seulement 10 minutes en train, Nantes est vivante et chargée d’histoire.<br/>
Parcourez le Voyage à Nantes!
                  </td>
                </tr>
              </table>
            </p>
              <div style="padding: 6px">Flânez dans les quartiers, découvrez les spécialités, faites une pause dans l’un des nombreux restaurants et ne repartez pas sans avoir visité
<br/>Le Château des Ducs de Bretagne et les Machines de l’île sont des choses à ne pas rater !</div>
          </div>



          <div class="jumbotron activite">
            <p>
              <table>
                <tr>
                  <td>
                    <img src="images/van_evt_2015-180x150.jpg"/>
                  </td>
                  <td><h3>Spectacles et festivals</h3>
                    Les chambres d’hôtes de Bel Air à Mauves sur Loire sont situées au croisement de nombreux festivals.
                  </td>
                </tr>
              </table>
            </p>
              <div style="padding: 6px">Profitez de votre séjour pour aller voir des concerts, assister à des pièces de théâtre, rencontrer des auteurs … De Nantes à Angers, en passant par Cholet et la Vendée, vous serez enchantés.
<br/>La folle journée (Janvier)
<br/>Festival de polar Mauves en noir (avril) à Mauves sur Loire
<br/>Le Voyage à Nantes (été)
<br/>…</div>
          </div>
        </td>
      </tr>

    </table>


    </center>
    <br/>
    <br/>
    <br/>

    <div class="navbar navbar-default navbar-fixed-bottom" style="margin-top:-50px;height:51px">
        <div id="navbar-main" class="navbar-collapse navbar" style="background-color:#996600;">
          <div class="container">
            <ul class="nav navbar-nav" style="margin-left:16%">
              <li><a href=#>CGV</a></li>
              <li><a href=#>Mentions Légales</a></li>
              <li><a href=#>Plan du site</a></li>
              <li><a href=#>Partenaires</a></li>
              <li><a href=#>Création Grégory Fauchille / HDReady Graphics</a></li>
            </ul>
          </div>
      </div>
    </div>

  </body>
</html>
