<?php

if(isset($_POST['num_sub_sub'])) {
    $num1 = $_POST['num_sub_1'];
    $num2 = $_POST['num_sub_2'];
    $diff = $num1 - $num2;
    echo "The difference of $num1 and $num2 is: " . $diff;
}
