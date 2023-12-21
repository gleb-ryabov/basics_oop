<?php
    class Airport{
        private $name;
        // Конструтор
        public function __construct(string $name){
            $this->name = $name;
        }

        /**
         * Функция приема самолета в аэропорт
         * @param Plane $airplane
         */
        public function take_plane($airplane){
            echo "Осуществляется прием самолета {$airplane->name} в аэропорту {$this->name}<br>";
            $airplane-> landing();
        }

        /**
         * Функция освобождения места в аэропорту
         * @param Plane $airplane
         */
        public function free_up_space($airplane){
            $airplane->take_off();
            echo "Место самолета {$airplane->name} в аэропорту {$this->name} освободилось<br>";
        }

        /**
         * Функция ухода самолета на стоянку
         * @param Plane $airplane
         */
        public function aircraft_parking($airplane){
            echo "Самолет {$airplane->name} ушел на стоянку в аэропорту {$this->name}<br>";
        }

        /**
         * Функция готовности вылета самолета
         * @param Plane $airplane
         */
        public function ready_take_off($airplane){
            echo "Самолет {$airplane->name} готов к вылету из аэропорта {$this->name}<br>";
        }

        /**
         * Функция заправки самолета
         * @param Plane $airplane
         */
        public function refueling_aircraft($airplane){
            echo "Производится заправка самолета {$airplane->name} в аэропорту {$this->name}<br>";
        }

        /**
         * Функция посадки пассажиров на самолет
         * @param Plane $airplane
         */
        public function boarging_passengers($airplane){
            echo "Производится посадка пассажиров на самолет {$airplane->name} в аэропорту {$this->name} <br>";
        }
    }
?>