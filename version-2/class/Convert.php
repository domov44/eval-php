<?php 

class Convert{
    public $choices;

    public function chooseTypeFile()
    {
        $choice1 = new Choice('CSV', 'csv');
        $choice2 = new Choice('XML', 'xml');

        $this->choices = array($choice1, $choice2);
    }
}