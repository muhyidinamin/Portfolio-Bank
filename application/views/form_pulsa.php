<?php
	if(isset($_GET['error'])){
	   $error = $_GET['error'];
	}
    else{
        $error='';
    }
    $pesan='';
    if($error=='kosong'){
        $pesan="Silahkan isi semua field yang ada...!!!";
    }
    else if($error=='salah'){
        $pesan="Silahkan isi No Rekening dengan benar";
    }
?>
<h3>Isi Ulang Pulsa</h3>
<form method="post" action="nominal">
<div id="form">
	  <input type="text" name="tujuan" placeholder="Nomor tujuan" /><br />
	  <input type="submit" value="Isi Ulang" name="submit" /><br>
  	  <span class="error"><strong>
	  <?php echo $pesan; ?>
      </strong></span>
</div>
</form>