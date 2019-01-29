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
        $pesan="Username atau Password anda Salah";
    }
?>
<div id="formlog">
    <center><h3>LOGIN E-BANK</h3></center>
    <hr/>
    <form action="E_banking/login_proses" method="post" name="Login_Form">       
        <label><b>Username</b></label><br>
        <input type="text" placeholder="Enter Username" name="username" required><br>

        <label><b>Password</b></label><br>
        <input type="password" placeholder="Enter Password" name="password" required><br>
        <input type='submit' name='submit' value='Login'>
    </form>
    <span class="error"><strong>
       <?php echo $pesan; ?>
        </strong></span>
</div>

<br><br>
<!-- hindari kres dengan css yang lain sementara disini-->
<style> 
#formlog{
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