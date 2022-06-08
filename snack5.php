<?php

/*
  ## Snack 5
  Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
 */

$paragraph = "Wow. Heartfelt, funny, beautiful, sad, Morbius has it all. Ever since I was a young child I dreamed of the Marvel Legend, Michael Morbius, to make his debut on the big screen. I’d run into the kitchen screaming “father! Father! Have they announced a film about Doctor Micheal Morbius yet?” My father would chuckle, put down his newspaper and say “no son. Not yet.” As my life went on I became afraid I would not live to see the day of Doctor Micheal Morbius’ theatrical debut. But then the fateful day Venom (2018) released, I knew it was possible. 4 years later I run into the kitchen “Father! Father! I am about to see Doctor Micheal Morbius’ big screen debut!” But there was no chuckle. Not rustling of his newspaper. My father had died right before I entered. I had an extra ticket for him. I went to the movie anyways and I loved it! But I stay for the big post credit scene; as any Morbius fan would. And there it was. My own father, who had died and put his soul into the projector, as the vulture. ‘What’s up doc!’ He said. My own father died so he could help make Morbius even better. God love him. God love Morbius.";

$explodedParagraph = explode(".", $paragraph);
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
  <h2>Paragrafo:</h2>
  <p><?php echo $paragraph; ?></p>
  <h2>Frasi:</h2>
  <ul>
    <?php for($i=0; $i < count($explodedParagraph); $i++):?>
      <li><?php echo $explodedParagraph[$i]?></li>
    <?php endfor; ?>
  </ul>
</body>
</html>