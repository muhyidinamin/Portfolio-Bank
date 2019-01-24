<!DOCTYPE html>
<html >
    <head>
        <title>Beranda</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/stylesheet.css">
    </head>
    
    <body>
    <div id="kulit">
        <div id="header">
            <h1><a href="index.php"><img src="<?php echo base_url();?>assets/img/cb.png" alt="Centralbank" style="width:400px;height:100px;"></a></h1>	
        </div>

        <div id="navbar">
            <ul>
              <li><a href="index.php">Home</a></li>
				<li class="dropdown" style="float:left;">
				<a href="#" class="dropbtn">Produk & Layanan</a>
				<div class="dropdown-content">
					<a href="#">Simpanan</a>
					<a href="#">Pinjaman</a>
					<a href="#">Kartu Kredit</a>
				</div>
				</li>
				<li><a href="<?php echo base_url('Beranda/promo'); ?>">Promo</a></li>
				<li class="dropdown" style="float:left;">
				<a href="#" class="dropbtn">Tentang Kami</a>
				<div class="dropdown-content" >
					<a href="<?php echo base_url('Beranda/contact'); ?>">Contact Us</a>
					<a href="<?php echo base_url('Beranda/cabang'); ?>">Cabang</a>
				</div>
				</li>
              <li style="float:right" class="dropdown">
			  <a class="active" href="">User Acount</a>
			  <div class="dropdown-content"> 
					<a href="<?php echo base_url('E_banking'); ?>">Login</a>
					<a href="<?php echo base_url('Register'); ?>">Register</a>
				</div>
			  </li>
            </ul>
        </div>
<hr>

<div id="section">