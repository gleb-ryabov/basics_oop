<?php
    abstract class Plane{
        public $name;
        private $max_speed;
        private $status = "Самолет на земле";

        // Конструктор
        public function __construct(string $name, int $max_speed){
            $this->name = $name;
            $this->max_speed = $max_speed;
        }
        // Функция взлета самолета
        public function take_off(){
            echo "Самолет {$this->name} взлетел <br>";
            $this->status = "Самолет в воздухе";
        }
        // Функция посадки самолета
        public function landing(){
            echo "Самолет {$this->name} совершил посадку <br>";
            $this->status = "Самолет на земле";
        }
        /**
         * Функция для получения статуса самолета
         * @return string
         */
        public function get_status(){
            return $this->status;
        }
    }
?>