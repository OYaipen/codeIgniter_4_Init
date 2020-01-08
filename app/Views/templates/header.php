<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TodoApp</title>


        <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css') ?>" type="text/css">


</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand">TodoApp</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                                <li class="nav-item active">
                                        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                        <a class="nav-link" href="/about">about <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                        <a class="nav-link" href="/news">News <span class="sr-only">(current)</span></a>
                                </li>


                        </ul>
                </div>
        </nav>
        <div class="container">
        
        <h1><?= $title; ?></h1>