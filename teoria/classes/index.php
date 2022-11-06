<?php

    // Declaracion y nombre de la clase

    class Ejemplo{

        // Propiedades de la clase

        public $name;
        public $date;

        // Contructor

        public function __construct($name)
        {
            $this->name = $name;
        }

        // Methods

        public function setDate($date){
            $this->date = $date;
        }

        public function getDate(){
            return $this->date;
        }

        public function getName(){
            return $this->name;
        }


    }

?>