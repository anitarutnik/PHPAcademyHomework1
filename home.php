<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="row">
        <h1 class="large-text-center" style="font-family: 'Cooper Black'">Hello! This is my first<img src="https://www.pngitem.com/pimgs/m/130-1302050_homework-png-transparent-png.png" alt="homework" style="display:block; margin-left: auto ; margin-right: auto; width: 17%">for PHP Academy. Enjoy!</h1>
        <hr>
    </div>
    <?php
        require "nav.html";
    ?>
    <div class="callout secondary">
        <h4><strong>Let's see what I need to do for my first homework! :)</strong></h4>
        <h5><strong>Preconditions</strong></h5>
        <ol>
            <li>Create GitHub profile if you don't have one</li>
            <li>Post your profile on General channel on Slack</li>
        </ol>
        <div class="callout primary">
        <h5><strong>Mandatory</strong></h5>
        <ol>
            <li>Create 3 pages using a CSS Framework of your choice, except Bootstrap.</li>
            <li>Every page must have a relative link to every other page.</li>
            <li>Together all 3 pages must have a total of 30 unique HTML elements</li>
            <li>Try to reuse as much content as possible if they are same between pages. At least one include/include_once and one require/require_once is mandatory.</li>
            <li>Together all 3 pages must have at least 10 PHP operators</li>
            <li>All 3 pages must be valid by Markup Validation Service</li>
            <li>Your homework must be pushed (do not use file upload) to GitHub repository PHPAcademyHomework1.</li>
        </ol>
        </div>
        <div class="callout alert">
            <h5><strong>I can also get some extra points! </strong></h5>
            <ol>
                <li>Do all of your work in develop branch.</li>
                <li>Once you are done, create a pull request and put one of your colleagues as a reviewer.</li>
                <li>When your homework is approved, merge it to the master branch.</li>
            </ol>
        </div>
    </div>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
<?php
    include "footer.html";
?>
</html>