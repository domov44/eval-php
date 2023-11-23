<?php
require_once 'Choice.php';

class Convert
{
    public $choices;
    public function convert()
    {
        $choice1 = new Choice('csv', 'csv');
        $choice2 = new Choice('xml', 'xml');

        $this->choices = array($choice1, $choice2);
    }


    public function convertCsvToJson($csvFile)
    {
        $csvBrut = file_get_contents($csvFile, 'r');
        $csvSpace = explode("\n", $csvBrut);
        $columns = str_getcsv($csvSpace[0], ',');
        $csvContent = array();

        for ($i = 1; $i < count($csvSpace); $i++) {
            $row = str_getcsv($csvSpace[$i], ',');
            if (count($row) === count($columns)) {
                $rowData = array();
                for ($j = 0; $j < count($columns); $j++) {
                    $rowData[$columns[$j]] = is_numeric($row[$j]) ? (int)$row[$j] : $row[$j];
                }
                $csvContent[] = $rowData;
            }
        }

        return json_encode($csvContent, JSON_PRETTY_PRINT);
    }


    public function convertXmlToJson($xmlFile)
    {
        $xml = simplexml_load_file($xmlFile);
        $xmlArray = json_decode(json_encode($xml), true);
        return json_encode($xmlArray, JSON_PRETTY_PRINT);
    }
}
