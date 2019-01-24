<!DOCTYPE html>
<html >
    <head>
        <title>e-Banking</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/stylesheet.css">
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    width:200px;
    padding: 4px;
    font-size: 14px; 
    text-align: left;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: relative;
    background-color: #a6a6a6;
    min-width: 140px;
}

.dropdown-content a {
    padding: 4px;
    text-decoration: none;
    display: block;
    color: black;
    border:;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
    </head>
    <body>
    <?php       if (empty($_SESSION['username'])) {
        redirect('E_banking');
      }?>
    <div id="kulit">
        <div id="header">
            <h1><a href="index.php"><img src="<?php echo base_url();?>assets/img/ecb.png" alt="Rumahduit" style="width:400px;height:50px;"></a></h1>	
        </div>

        <div id="navbar">
            <ul>
              <li style="float:right"><a class="active" href="<?php echo base_url('E_banking/logout');?>">Logout</a></li>
              <li style="float:right"><a class="active" href=""><?php echo $this->session->userdata('username'); ?></a></li>
            </ul>
        </div>
	
        <hr>
	<div class="nav-left">
                    <div class="dropdown">
                        <button class="dropbtn">INFORMASI</button>
                        <div class="dropdown-content">
                             <a href="<?php echo base_url('E_banking/tampil_saldo');?>">Cek Saldo</a>
                             <a href="<?php echo base_url('E_banking/tampil_mutasi');?>">Cek Mutasi</a>
                        </div>
                    </div><br/>
                    <div class="dropdown">
                        <button class="dropbtn">TRANSFER</button>
                        <div class="dropdown-content">
                             <a href="<?php echo base_url('E_banking/transfer');?>">Sesama Bank</a>
                        </div>
                    </div><br/>
                    <div class="dropdown">
                        <button class="dropbtn">PEMBELIAN</button>
                        <div class="dropdown-content">
                             <a href="<?php echo base_url('E_banking/pulsa');?>">Isi Pulsa</a>
                        </div>
                    </div><br/>
                    <div class="dropdown">
                        <button class="dropbtn">AKUN</button>
                        <div class="dropdown-content">
                             <a href="<?php echo base_url('E_banking/update_password');?>">Update Password</a>
                        </div>
                    </div><br/>
                    <div class="dropdown">
                        <button class="dropbtn">TENTANG KAMI</button>
                        <div class="dropdown-content">
                             <a href="#">Contact Us</a>
                        </div>
                   </div>
                   <div class="dropdown">
                        <button class="dropbtn">TENTANG KAMI</button>
                        <div class="dropdown-content">
                             <a href="<?php echo base_url('E_banking/logout'); ?>">Logout</a>
                        </div>
                   </div>
        </div>