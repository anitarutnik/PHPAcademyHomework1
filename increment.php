<?php

if(isset($_POST['num_inc_sub'])) {
    $num1 = $_POST['num_inc_1'];
    $x = $num1;
    $inc = ++$num1;
    echo "The number $inc is one greater than number " . $x;
}
