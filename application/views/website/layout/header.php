<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/images/icons.png');?>" rel="icon" Type="text/ico">
    <script language='JavaScript'>
    var txt="Contoh Title Bergerak";
    var speed=300;
    var refresh=null;
    function action() { document.title=txt;
    txt=txt.substring(1,txt.length)+txt.charAt(0);
    refresh=setTimeout("action()",speed);}action();
    </script>
    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/style1.css');?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>

<body>
<nav class="navbar navbar-expand bg-dark fixed-top m-3 p-2">
  <div class="container-fluid align-items-center">
    <img class="m-1 p-1" src="<?php echo base_url('assets/images/icon1.png');?>" width="50px">
    <img class="mt-1" src="<?php echo base_url('assets/images/logo1.png');?>" width="250px">
    <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
      <ul class="navbar-nav align-middle">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><b>HOME</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><b>PRODUK</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><b>TENTANG KAMI</b></a>
        </li>
        <span><button class="btn btn-success"><i class="bi bi-whatsapp h5"></i> <b>BELI</b></button></span>
      </ul>
    </div>
  </div>
</nav>

<!-- <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div> -->
    
