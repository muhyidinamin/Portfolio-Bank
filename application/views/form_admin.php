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
<form action="Admin/proses" method="post" name="Login_Form">       
    <h3>Administration! Please Sign In</h3>
            <label><b>Username</b></label><br>
        <input type="text" class="form-control" name="username" placeholder="username" required /><br>

            <label><b>Password</b></label><br>
            <input type="password" class="form-control" name="password" placeholder="password" required/><br>

    <button  name="submit" value="Login" type="submit">Login</button><br>
        </form>
      
        <span class="error"><strong>
        <?php echo $pesan; ?>
        </strong></span>
</form>