<?php


if (isset($_POST['num_dec_sub'])) {
    $num1 = $_POST['num_dec_1'];
    $x = $num1;
    $inc = --$num1;
    echo "The number $inc is one lesser than number " . $x;
}
