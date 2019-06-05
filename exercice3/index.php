<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 3</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 3 - PHP</h1>
        <h3>Partie 5</h3>
        <p class="lead">Avec le tableau de l'exercice , afficher la valeur de l'index 5.</p>
      </div>
    </div>
    <!-- Balise signifiant que la suite est en PHP -->
    <?php
      // Création et initialisation du tableau
      $month = array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
      echo 'Valeur index 5 du tableau : '.$month[5];
    ?>
  </div>
</body>
</html>
