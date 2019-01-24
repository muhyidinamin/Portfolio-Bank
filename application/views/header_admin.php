<!DOCTYPE html>
<html >
    <head>
        <title>e-Banking</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/stylesheet.css">
    </head>
    
    <body>
    <?php       if (empty($_SESSION['admin'])) {
        redirect('Admin');
     }?>
    <div id="kulit">
        <div id="header">
            <h1><a href="index.php"><img src="<?php echo base_url();?>assets/img/adm.png" alt="Centralbank" style="width:400px;height:50px;"></a></h1>	
        </div>

        <div id="navbar">
            <ul>
              <li style="float:right"><a href="<?php echo base_url('Admin/logout'); ?>">Logout</a></li>
			  <li style="float:right"><a class="active" href=""><?php echo $this->session->userdata('admin'); ?></a></li>
            </ul>
        </div>
	
		<hr>
		<div class="nav-left">
            <ul>
              <li><a class="active" href="#">MENU</a></li>
			  <li class="dropdownleft" style="float:left;">
				<ul>
				<a href="#" class="dropbtnleft">INFORMASI</a>
				<ul>
				<div class="dropdown-isi" >
					<a href="<?php echo base_url('Admin/tampilNasabah'); ?>">Daftar Nasabah</a>
					<a href="<?php echo base_url('Admin/tampilTransaksi'); ?>">Transaksi</a>
				</div>
				</ul>
				</ul>
				</li>
			<li class="dropdownleft" style="float:left;">
				<ul>
				<a href="#" class="dropbtnleft">CREATE</a>
				<ul>
				<div class="dropdown-isi" >
					<a href="<?php echo base_url('Admin/posting_promo');?>">Posting Promo</a>
				</div>
				</ul>
				</ul>
				</li>
			<li class="dropdownleft" style="float:left;">
				<ul>
				<a href="#" class="dropbtnleft">UPDATE</a>
				<ul>
				<div class="dropdown-isi" >
					<a href="<?php echo base_url('Admin/kurs');?>">Update Kurs</a>
				</div>
				</ul>
				</ul>
				</li>
			<li class="dropdownleft" style="float:left;">
				<ul>
				<a href="#" class="dropbtnleft">HAPUS AKUN</a>
				<ul>
				<div class="dropdown-isi" >
					<a href="<?php echo base_url('Admin/tampil_user');?>">Akun Nasabah</a>
				</div>
				</ul>
				</ul>
				</li>
            </ul>
        </div>
<div id="section">