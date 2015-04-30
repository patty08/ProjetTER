<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Projet_TER</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>

        <div class="container">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="text-center"><a href="index.php">Analyse SÃ©mantique et Langue naturelle</a></h1>
                </div>
            </div>

            <form class="text-center" action="traitement.php" method="post">    
                <br>
                <label for="inputText" class="sr-only">Texte Ã  analyser </label>
                <input type="text" name="text" class="form-control" placeholder="Tapez votre texte" required autofocus>
                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Analyser la phrase</button>
            </form>
            
<?php
            $res = $pdo->query('SELECT * FROM ani where id = 2');
            $data = $retour->fetch();
            echo $data;
                   
            
  ?>          
        </div> <!-- /container -->
    </body>
</html>