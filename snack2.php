<?php 

/*
  ## Snack 2
  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 */

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

function verifyAccess($name, $email, $age){
  if(strlen($name)>=3 &&
     strpos($email, '.') !== false &&
     strpos($email, '@') !== false &&
     !empty($age) &&
     is_numeric($age)) return "Accesso riuscito!";
  else return "Accesso negato!";
}

var_dump($name);
var_dump($email);
var_dump($age);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php echo verifyAccess($name, $email, $age); ?></h1>
</body>
</html>