<?php
    class Plane_TU_154 extends Plane{
        public function __construct(string $name, int $max_speed, Crew $crew){
            parent::__construct($name, $max_speed, $crew);
            // Композиция - Самолет не может существовать без двигателя
            $this->engine = new Engine (500);
        }    
    }
?>