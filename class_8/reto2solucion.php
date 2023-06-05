<?php
require 'functions.php';
$numero = $_POST['Numero'];
?>

<table border="1">
    <tr>
        <td colspan="2">Multiplication</td>
    </tr>
    <?php print_results(multiplication_table($numero)); ?>
    <tr>
        <td colspan="2">Factorial</td>
    </tr>
    <?php print_results(factorial($numero)); ?>
</table>