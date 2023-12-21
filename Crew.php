<?php
    class Crew {
        private $crew;
        
        /**
         * Класс используется для ассоциации
         * @param array $crew;
         */
        public function __construct(... $crew){
            foreach ($crew as $member){
                $this->crew[] = $member;
            }
        }

        // Выводит на экран весь экипаж
        public function get_crew(){
            echo "Экипаж: ";
            foreach ($this->crew as $member){
                echo $member . "; ";
            }
            echo "<br>";
        }
    }

?>