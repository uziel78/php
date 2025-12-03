<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Steps</title>
    <style>
        .body-1 {background-color: red;}
        .body-2 {background-color: green;}
        .body-3 {background-color: aqua;}
        .body-4 {background-color: yellow;}
        .body-5 {background-color: magenta;}
        .body-6 {background-color: gray;}
    </style>
</head>
<body class="body-<?php echo rand(1, 6); ?>">
    <h1><?php echo 'Hello from PHP!'; ?></h1>
    <h1>Hey, this is my first .php file</h1>
    <h1>A Dice roll: <?php echo rand(1, 6); ?></h1>
</body>
</html>