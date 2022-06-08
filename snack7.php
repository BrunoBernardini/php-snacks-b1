<?php 

/*
  ## Snack 7
  Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
 */

$classe = [
  [
    "nome" => "Piero",
    "cognome" => "Scotti",
    "voti" => [4, 7, 9, 3, 8]
  ],
  [
    "nome" => "Berta",
    "cognome" => "Trapana",
    "voti" => [3, 10, 2, 5, 1]
  ],
  [
    "nome" => "Franco",
    "cognome" => "Franchi",
    "voti" => [0, 5, 1, 9, 2]
  ],
  [
    "nome" => "Giannino",
    "cognome" => "Di Napoli",
    "voti" => [9, 4, 5, 10, 7]
  ],
  [
    "nome" => "Marco",
    "cognome" => "Spettatore",
    "voti" => [7, 9, 3, 8, 1]
  ],
  [
    "nome" => "Beppe",
    "cognome" => "Conte",
    "voti" => [9, 5, 8, 7, 3]
  ],
];

function average($array){
  $tempSum = 0;
  for($i=0; $i<count($array); $i++) $tempSum += $array[$i];
  return $tempSum/count($array);
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medie classe</title>
</head>
<body>
  <h1>Classe:</h1>
  <ul>
    <?php for($i=0; $i<count($classe); $i++): ?>
      <li><?php echo "Nome: <b>".$classe[$i]["nome"]."</b><br>Cognome: <b>".$classe[$i]["cognome"]."</b><br>Media voti: <b>".average($classe[$i]["voti"])."</b>"?></li>
    <?php endfor; ?>
  </ul>
</body>
</html>