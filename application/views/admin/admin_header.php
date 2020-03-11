<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet"  href="<?php echo base_url('assets/css/bootstrap.css')?>">
	<!--<link rel="stylesheet"     href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/lux/bootstrap.min.css">-->

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <?= anchor ('Login/index', 'Articles', 'class="navbar-brand"');?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('login/logout') ?>">Logout</a>
      </li>    
    </ul>

   
  </div>
</nav>