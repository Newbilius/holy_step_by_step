<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
if (!isset($_GET['add_data'])) {
    $_GET['add_data'] = 0;
};
$num = intval($_GET['add_data']);
sleep(1);
if ($num == 5) {
    echo $step->next_step();
} else {
    $num++;
    echo $step->this_step("часть {$num}","?add_data={$num}");
}
?>