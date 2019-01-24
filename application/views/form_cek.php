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
        $pesan="No Rekening atau Pin anda Salah";
    }
    elseif ($error=='username') {
        $pesan="Username sudah ada. Gunakan username Lain.";
    }
?>
<form action='daftar' method='post'>
<div id="formcek">
<center><h3>DAFTAR E-BANK</h3></center>
<hr/>
<table>
    <label for="date">No Rekening</label><br/>
    <input type="text" name="norek" placeholder="NoRek" />
    <label for="date">Kode PIN</label><br/>
    <input type="password" name="pin" placeholder="PIN" /><br/>
    <input type="submit" value="Next"/>
</table>
<span class="error"><strong>
   <?php echo $pesan; ?>
    </strong></span>
</div>
</form>
<br/><br/>
<style> 
#formcek{
    width: 320px;
    padding: 10px;
    border: 2px solid #4CAF50;
    margin: 0 350px;
}
input[type=text], select {
    width: 100%;
    padding: 6px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 6px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 7px 10px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>
