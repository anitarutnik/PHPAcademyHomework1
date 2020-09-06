<?php

if(isset($_POST['num_div_sub'])) {
    $num1 = $_POST['num_div_1'];
    $num2 = $_POST['num_div_2'];
    $div = $num1 / $num2;
    echo "The average is: " . $div;
}