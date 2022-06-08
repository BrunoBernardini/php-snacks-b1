<?php

/*
  ## Snack 1
  Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
  Olimpia Milano - Cantù | 55-60
 */

$matches = [
  [
    "homeTeam" => "Olimpia Milano",
    "visitingTeam" => "Cantù",
    "homePoints" => 55,
    "visitingPoints" => 60
  ],
  [
    "homeTeam" => "Virtus Pallacanestro Bologna",
    "visitingTeam" => "Los Angeles Lakers",
    "homePoints" => 70,
    "visitingPoints" => 30
  ],
  [
    "homeTeam" => "San Antonio Spurs",
    "visitingTeam" => "Golden State Warriors",
    "homePoints" => 25,
    "visitingPoints" => 65
  ],
  [
    "homeTeam" => "Pallacanestro Varese",
    "visitingTeam" => "Cleveland Cavaliers",
    "homePoints" => 15,
    "visitingPoints" => 80
  ],
  [
    "homeTeam" => "New York Knicks",
    "visitingTeam" => "Chicago Bulls",
    "homePoints" => 55,
    "visitingPoints" => 65
  ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario partite di basket</title>
</head>
<body>
  <h1>Tutte le partite:</h1>
  <ul>
    <?php for($i=0; $i<count($matches); $i++): ?>
      <li><?php echo $matches[$i]['homeTeam']." - ".$matches[$i]['visitingTeam']." | ".$matches[$i]['homePoints']." - ".$matches[$i]['visitingPoints']?></li>
    <?php endfor; ?>
  </ul>
</body>
</html>