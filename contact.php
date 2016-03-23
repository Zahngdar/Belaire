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
              <a class="navbar-brand" href="/index.php"><h1 id="titre"> Bel-Air</h1> </br>

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
      <div id="tete">

      </div>
    </div>

    <style>
      #contact{
        display: inline-block;
        border-color: #523c24;
        border-width: 6px;
        border-radius: 20px;
        padding: 12px;
        margin-top:8%;
      }
    </style>

    <table style="width:50%">
      <tr>
        <td rowspan="2" colspan="2">
          <div class="jumbotron" id="contact">
            <p>
              <h2>Contacts</h2>
              <h3>Adresse</h3>
              32 rue du Cellier<br/>
              44470 Mauves sur Loire<br/>
              <h3>Téléphone</h3>
              06 74 37 37 30<br/>
              <h3>E-mail</h3>
              <a href="mailto:contact@belair-chambres-hotes.fr">contact@belair-chambres-hotes.fr</a><br/>
              <h3>Rejoignez-nous sur Facebook</h3>
              <a href="facebook.com/chambres.dhotes.belair.mauves">facebook.com/chambres.dhotes.belair.mauves</a>
            </p>
          </div>
        </td>
        <td>
          <img src="images/Bel_Air-275x200.jpg"/>
        </td>
      </tr>
      <tr>
        <td>
          <img src="images/Bel_Air-275x200.jpg"/>
        </td>
      </tr>

    </table>


    </center>
  </body>
</html>
