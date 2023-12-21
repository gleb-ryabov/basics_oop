<?php
    class Engine{
        private $power;
        /**
         * Класс испольуется для композиции
         * @param int $power - мощность двигателя
         */
        public function __construct($power){
            $this->power = $power;
        }
    }
?>