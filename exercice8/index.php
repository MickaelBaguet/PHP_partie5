<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 8</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 8 - PHP</h1>
        <h3>Partie 5</h3>
        <p class="lead">Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs
        de ce tableau.</p>
      </div>
    </div>
    <!-- Balise signifiant que la suite est en PHP -->
    <?php
      $months = array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
      // On récup la taille du tableau
      $arrLength = count($months);
      // On utilise un for pour les tableaux 'classique'
      for($x = 0; $x < $arrLength; $x++) {
        $nbr = $x+1;
    ?>
        <p> Valeur n°<?= $x+1 ?> : <?= $months[$x] ?></p>
    <?php
      }
    ?>
  </div>
</body>
</html>
