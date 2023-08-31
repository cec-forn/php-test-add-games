<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"/>
    <title>
        <?php
            echo $title ?? "Default title";
        ?>
    </title>
</head>
<body>