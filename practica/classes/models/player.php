<?php
  class Player {
    public $name;
    public $health;
    public $attack;
    public $defense;
    
    public function __construct($name, $health, $attack, $defense) {
      $this->name = $name;
      $this->health = $health;
      $this->attack = $attack;
      $this->defense = $defense;
    }
    
    public function welcome() {
      echo "Welcome: " . $this->name;
    }
  }
?>