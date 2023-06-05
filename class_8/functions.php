<?php
require 'Tuple.php';

function factorial($number)
{
    $factorial = 1;
    for ($i = $number; $i >= 1; $i--) {
        $factorial *= $i;
    }
    $tuple = new Tuple("$number!", $factorial);
    $list[0] = $tuple;
    return $list;
}

function multiplication_table($number) 
{
    $table = [];
    for ($i = 0; $i <= 10; $i++) {
        $tuple = new Tuple("$i x $number", $i*$number);
        $table[$i] = $tuple;
    }
    return $table;
}

function print_results($list)
{
    foreach($list as $element) {
        echo '<tr>';
        echo "<td>{$element->get_label()}</td>";
        echo "<td>{$element->get_number()}</td>";
        echo '</tr>';
    }
}
?>