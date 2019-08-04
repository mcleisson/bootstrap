<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title();?></title>
    
</head>
<body>
    <?php wp_head();?>
    <div class="navbar">
        <div class="navbar-inner">
            <a class="brand" href="#"><?php wp_title();?></a>
            <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            </ul>
        </div>
    </div>