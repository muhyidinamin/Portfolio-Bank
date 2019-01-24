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
<h3>Transfer</h3>
<form method="Post" action="konfirmasi">
<div id="form">
	  <input type="text" name="tujuan" placeholder="Tujuan" /><br />
	  <input type="text" name="nominal" placeholder="Nominal" /><br />
	  <input type="submit" value="Transfer" name="submit" /><br>
	  <span class="error"><strong>
	  <?php echo $pesan; ?>
      </strong></span>
</div>
</form>