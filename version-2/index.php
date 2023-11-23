<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Convertir un fichier en JSON</title>
</head>

<?php
session_start();
require_once 'class/Convert.php';
$convert = new Convert();
$convert->convert();
?>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <main class="max-w-lg mx-auto bg-white p-6 rounded-md shadow-md">
            <section>
                <form action="telechargement.php" name="jsonForm" method="post" enctype="multipart/form-data" class="flex flex-col space-y-4">
                    <label for="fileType" class="text-gray-700 font-bold">Que voulez vous convertir ?</label>
                    <select name="fileType" id="fileType" class="border border-gray-300 p-2 w-full focus:outline-none focus:border-blue-500">
                        <?php
                        foreach ($convert->choices as $choice) {
                            echo '<option value="'. $choice->value .'">'. $choice->label .'</option>';
                        }
                        ?>
                    </select>
                    <input type="file" name="file" class="border border-gray-300 p-2 w-full" required />
                    <input type="submit" name="submit" value="Convertir en JSON" class="mt-4 bg-blue-500 text-white p-2 rounded hover:bg-blue-700 cursor-pointer" />
                </form>
            </section>

        </main>

    </div>

</body>

</html>