<!--CONNEXION A LA BASE DE DONNEES ANIMAUX-->
<?php
session_start();
require_once('include/include.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Projet TER</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="" />
        <meta name="copyright" content="" />
        <link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />                  <!-- KICKSTART -->
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />                          <!-- CUSTOM STYLES -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/kickstart.js"></script>                                  <!-- KICKSTART -->
    </head>
    <body>
        <!-- Menu Horizontal -->
        <ul class="menu">
            <li class="current"><a href="index.php">Accueil</a></li>
            <li><a href="analyse.php"><span class="icon" data-icon="R"></span>Projet</a>
                <ul>
                    <li><a href=""><i class="fa fa-download"></i><span> Docs</span></a>
                        <ul>
                            <li><a href="approche.php"><i class="fa fa-file-text"></i> Description</a></li>
                            <li><a href="annexes.php"><i class="fa fa-file-text"></i> Annexes</a></li>
                        </ul>
                    </li>
                    <li class="divider"><a href="analyse.php"><i class="fa fa-file"></i> Application</a></li>
                </ul>
            </li>
            <li><a href="contact.php">Membres</a></li>
        </ul>

        <div class="grid">

            <div class="col_12">
                <h5 class="strong">Analyse de texte :</h5>
                <p>Important: L'application surligne uniquement les mots du <code>domaine animal</code>.</p>
                <p>Exemple: le chat miaule</p>
                <hr />
                <div class="col_7">
                    <form class="text-center" action="traitement.php" method="post">
                        <label for="inputText" class="sr-only strong">Tapez votre texte: </label><br><br>
                        <input id="inputText" name="text" type="text" autofocus required class="fa-check-circle" placeholder="Tapez votre texte" size="85">
                        <br><br>
                        <br><button class="fa fa-check medium green" type="submit" > Analyser la phrase</button>
                    </form>
                </div
            </div>
            <div class="col_12">
            </div>

            <div class="clear">
            </div>
            <div id="footer">
                Aix Marseille Université - Faculté des sciences de Luminy<br>
                Master informatique
            </div
        </div>
    </body>
</html>
