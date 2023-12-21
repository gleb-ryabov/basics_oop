<?php
    require_once("Plane.php");
    require_once("Plane_MIG.php");
    require_once("Plane_TU-154.php");
    require_once("Airport.php");

    // Создание экипажа (используется для ассоциации)
    $crew1 = new Crew ("Пилот", "Стюардесса");
    $crew2 = new Crew ("Пилот", "Стюардесса", "Стюардесса");

    // Создание самолетов
    $tu_154 = new Plane_TU_154("ТУ-154", 900, $crew1);
    $mig = new Plane_MIG("Миг", 800, $crew2);

    // Создание аэропортов
    $begishevo = new Airport("Бегишево");
    $domodedovo = new Airport("Домодедово");


    // Для самолета Миг
    $crew = $mig->get_crew();
    $crew->get_crew();
    $begishevo->take_plane($mig);
    $begishevo->aircraft_parking($mig);
    $begishevo->refueling_aircraft($mig);
    $begishevo->ready_take_off($mig);
    $begishevo->free_up_space($mig);
    $mig->attack();


    // Для самолета ТУ-154
    echo "<br>";
    $crew = $tu_154->get_crew();
    $crew->get_crew();
    $domodedovo->refueling_aircraft($tu_154);
    $domodedovo->boarging_passengers($tu_154);
    $domodedovo->ready_take_off($tu_154);
    $domodedovo->free_up_space($tu_154);
    $begishevo->take_plane($tu_154);
    $begishevo->aircraft_parking($tu_154);
    echo $tu_154->get_status();
?>