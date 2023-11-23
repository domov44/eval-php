<?php

class Choice{
    public string $value;
    public string $label;

    public function __construct( string $value, string $label){
        $this->value = $value;
        $this->label = $label;
    }
}
?>