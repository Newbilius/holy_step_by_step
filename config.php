<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/class.php");

$step = new Holy_stepbystep();
$step->add("/steps/step1.php", "Шаг 1 - инициализация");
$step->add("/steps/step2.php", "Шаг 2 - лепим кучу данных");
$step->add("/steps/step3.php", "Шаг 3 - вывод данных во вторую папку");

?>