<?php
$xmlFile = $_FILES['filexml']['tmp_name'];
$xml = simplexml_load_file($xmlFile);
$xmlArray = json_decode(json_encode($xml), true);
$xmlJsonEncode = json_encode($xmlArray, JSON_PRETTY_PRINT);

$newFile = str_replace(".xml", "", $_FILES['filexml']['name']) . ".json";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Téléchargez votre fichier json</title>
</head>
<body>
  <?php
  if (file_put_contents("uploads/" . $newFile, $xmlJsonEncode)) {
    echo "<h1>Votre fichier JSON est prêt</h1> 
    <a href='uploads/$newFile' download>Télécharger</a>";
  } else {
    echo "<h1>Il y a eu un problème...</h1>";
  }
  ?>
  <a href="/eval-php/index.php">Convertir un autre fichier XML en JSON</a>
</body>
</html>
