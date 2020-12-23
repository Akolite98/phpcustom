<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Victor's Store</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo self::assets('vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <link rel="shortcut icon" href="<?php self::assets('img/logo.png'); ?>" type="image/x-icon">

  <!-- Custom styles for this template -->
  <link href="<?php echo self::assets('css/one-page-wonder.css');?>" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand d-flex align-items-end" href="#">
        <img src="<?php echo self::assets('img/logo.png'); ?>" alt="victor's store" style="width: 30px;">

        <span>ictor's Store</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <span class="d-block p-2 m-2 badge badge-primary"><?php self::auth('name'); ?></span>

            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Find Stuff</button>
            </form>
    </div>

</nav>

<ul class="nav nav-tabs mr-auto ml-auto">

    <li class="nav-item"><a class="nav-link active" href="/dashboard">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
    
    <form action="/logout" method="post" class="m-0">
        <li class="nav-item">
            <button type="submit" class="nav-link btn-outline rounded">Logout</button> 
        </li>
    </form>
   

</ul>