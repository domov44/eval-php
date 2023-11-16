<?php

class Choice
{
    private $options = ['csv', 'xml'];

    public function getOptions()
    {
        return $this->options;
    }
}

?>