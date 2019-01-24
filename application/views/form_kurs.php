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
        $pesan="Username dan Password Salah";
    }
?>
<form action='<?php echo $kurs->kode ?>' method='post'>
<table>
    <tr>
        <td>Kode</td><td><input type="text" name="kode" value="<?php echo $kurs->kode?>" disable /></td>
    </tr>
    <tr>
        <td>Mata Uang</td><td><input type="text" name="nama" value="<?php echo $kurs->nama?>" /></td>
    </tr>
    <tr>
        <td>Jual</td><td><input type="text" name="jual" value="<?php echo $kurs->jual?>" /></td>
    </tr>    
    <tr>
        <td>Beli</td><td><input type="text" name="beli" value="<?php echo $kurs->beli?>" /></td>
    </tr>
    <tr>
        <td><input type="submit" value="Update" name="Submit" /></td>
        <td><input type="button" value="Batal" onclick="javascript:history.go(-1)" /></td>
    </tr>
</table>
<span class="error"><strong>
   <?php echo $pesan; ?>
    </strong></span>
</form>