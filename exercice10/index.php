<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 10</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 10 - PHP</h1>
        <h3>Partie 5</h3>
        <p class="lead">Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau
          ainsi que les clés associés. Cela pourra être, par exemple, de la forme :
          "Le département" + nom du département + "a le numéro" + numéro du département</p>
      </div>
    </div>
    <!-- Balise signifiant que la suite est en PHP -->
    <?php
      // Déclaration d'un tableau associatif avec des clefs et des valeurs associées
      // clef => valeur
      $county = array(
        '59' => 'Nord',
        '62' => 'Pas-de-Calais',
        '02' => 'Aisne',
        '60' => 'Oise',
        '80' => 'Somme',
      );
      // On utilise un foreach pour les tableaux associatif ne récupérant la clef
      // et sa valeur correspondante
      foreach($county as $x => $x_value) {
    ?>
        <p>Le département <?= $x ?> a le numéro <?= $x_value ?>.</p>
    <?php
      }
    ?>
  </div>
</body>
</html>
