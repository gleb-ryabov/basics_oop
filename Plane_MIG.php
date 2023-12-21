<?php
    class Plane_MIG extends Plane{
        public function __construct(string $name, int $max_speed, Crew $crew){
            parent::__construct($name, $max_speed, $crew);
            // Композиция - Самолет не может существовать без двигателя
            $this->engine = new Engine (400);
        }   
        // Функция атаки
        public function attack(){
            echo "Производится атака самолетом {$this->name}! <br>";
        }
    }
?>