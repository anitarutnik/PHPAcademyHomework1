<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>More math</title>
        <link rel="stylesheet" href="css/foundation.css">
        <link rel="stylesheet" href="css/app.css">
    </head>
<body>
<?php
require "nav.html";
?>
<br>
<!--Modulus-->
<div class="grid-container">
    <p><strong>6. Find out the modulus of division.</strong></p>
</div>
<form action="modulus.php" name="modulus" method="post">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-6 cell">
                <label for="num_mod_1">Number 1
                    <input type="number" name="num_mod_1" placeholder="Enter a number">
                </label>
            </div>
            <div class="medium-6 cell">
                <label for="num_mod_2">Number 2
                    <input type="number" name="num_mod_2" placeholder="Enter a number">
                </label>
            </div>
            <div class="medium-2 cell">
                <button type="submit" class="success button" name="num_mod_sub">Calculate</button>
            </div>
        </div>
    </div>
</form>
<hr>
<!--Increment-->
<div class="grid-container">
    <p><strong>7. Enter a number and find out which number is one greater.</strong></p>
</div>
<form action="increment.php" name="increment" method="post">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-12 cell">
                <label for="num_inc_1">Number
                    <input type="number" name="num_inc_1" placeholder="Enter a number">
                </label>
            </div>
            <div class="medium-2 cell">
                <button type="submit" class="success button" name="num_inc_sub">Calculate</button>
            </div>
        </div>
    </div>
</form>
<hr><!--Decrement-->
<div class="grid-container">
    <p><strong>8. Enter a number and find out which number is one lesser.</strong></p>
</div>
<form action="decrement.php" name="decrement" method="post">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-12 cell">
                <label for="num_dec_1">Number
                    <input type="number" name="num_dec_1" placeholder="Enter a number">
                </label>
            </div>
            <div class="medium-2 cell">
                <button type="submit" class="success button" name="num_dec_sub">Calculate</button>
            </div>
        </div>
    </div>
</form>
<hr>
<!--Comparison (===)-->
<div class="grid-container">
    <p><strong>9. Enter two numbers and find out what's gonna happen.</strong></p>
</div>
<form action="identical.php" name="identical" method="post">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-6 cell">
                <label for="num_iden_1">Number 1
                    <input type="number" name="num_iden_1" placeholder="Enter a number">
                </label>
            </div>
            <div class="medium-6 cell">
                <label for="num_iden_2">Number 2
                    <input type="number" name="num_iden_2" placeholder="Enter a number">
                </label>
            </div>
            <div class="medium-2 cell">
                <button type="submit" class="success button" name="num_iden_sub">Calculate</button>
            </div>
        </div>
    </div>
</form>
<hr>
<!--Comparison (!)-->
<div class="grid-container">
    <p><strong>10. Enter two numbers and find out what's gonna happen.</strong></p>
</div>
<form action="notEqual.php" name="notEqual" method="post">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-6 cell">
                <label for="num_neq_1">Number 1
                    <input type="number" name="num_neq_1" placeholder="Enter a number">
                </label>
            </div>
            <div class="medium-6 cell">
                <label for="num_neq_2">Number 2
                    <input type="number" name="num_neq_2" placeholder="Enter a number">
                </label>
            </div>
            <div class="medium-2 cell">
                <button type="submit" class="success button" name="num_neq_sub">Calculate</button>
            </div>
        </div>
    </div>
</form>
<hr>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
<?php
include "footer.html";
?>
</html>