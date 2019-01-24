<?php
    if(isset($_GET['error'])){
       $error = $_GET['error'];
    }
    else{
        $error='';
    }
    $pesan='';
    if($error=='tidak_sama'){
        $pesan="Silahkan isi semua field yang ada...!!!";
    }
    else if($error=='salah'){
        $pesan="Password anda Salah atau Kosong. Silahkan cek dan coba lagi";
    }
?>
<form method="post" action="update_proses">
    <table>
    <tr>
        <td>Password Saat ini</td><td><input type="password"  name="pass" /></td>
    </tr>
    <tr>
        <td>Password Baru</td><td><input type="password" name="newpass" /></td>
    </tr>
    <tr>
        <td>Re-Password Baru</td><td><input type="password" name="repass" /></td>
    </tr>    
    <tr>
        <td><input type="submit" value="Update" name="update" /></td>
    </tr>
    <tr><td colspan=2>
                    <span class="error"><strong>
                    <?php echo $pesan; ?>
                    </strong></span>
    </td></tr>
    </table>
</form>
