<?php

if(isset($_POST['num_add_sub'])) {
    $num1 = $_POST['num_add_1'];
    $num2 = $_POST['num_add_2'];
    $sum = $num1 + $num2;
    echo "The sum of $num1 and $num2 is: " . $sum;
}