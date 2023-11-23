<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Résultat de la conversion en JSON</title>
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-8">
    <main class="max-w-lg mx-auto bg-white p-6 rounded-md shadow-md">
      <?php
      session_start();
      require_once 'class/Convert.php';
      $convert = new Convert();
      $convert->convert();

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fileType = $_POST['fileType'];

        foreach ($convert->choices as $choice) {
          $file = $_FILES['file']['tmp_name'];
          if ($fileType === 'csv') {
            $jsonEncode = $convert->convertCsvToJson($file);
          } elseif ($fileType === 'xml') {
            $jsonEncode = $convert->convertXmlToJson($file);
          }
          $newFile = str_replace('.' . $fileType, "", $_FILES['file']['name']) . ".json";
        }

        if (file_put_contents("uploads/" . $newFile, $jsonEncode)) {
          echo "<h1 class='text-2xl font-bold mb-4'>Votre fichier JSON est prêt</h1>
                          <a href='uploads/$newFile' class='bg-blue-500 text-white p-2 rounded hover:bg-blue-700 cursor-pointer' download>Télécharger</a>
                          <a href='/eval-php/version-2/index.php' class='text-blue-500 ml-2'>Convertir un autre fichier</a>";
        } else {
          echo "<h1 class='text-2xl font-bold mb-4 text-red-500'>Il y a eu un problème...</h1>";
        }
      } else {
        echo "<h1 class='text-2xl font-bold mb-4 text-red-500'>Vous devez uploader un fichier</h1>
        <a href='/eval-php/version-2/index.php' class='mt-4 bg-blue-500 text-white p-2 rounded hover:bg-blue-700 cursor-pointer'>Uploader un fichier</a>";
      }
      ?>
    </main>
  </div>
</body>

</html>