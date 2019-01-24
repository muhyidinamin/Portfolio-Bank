
<form action='nas_baru' method='post'>
<div id="formnas">
<center><h3>DAFTAR NASABAH BARU</h3></center>
<hr/>
<table>
	<tr><td><label>No KTP</label></td><td><input type="text" name="noktp" placeholder="No KTP" required /></td></tr>
	<tr><td><label>Nama Depan</label></td><td><input type="text" name="first" placeholder="Nama Depan" required /></td></tr>
	<tr><td><label>Nama Belakang</label></td><td><input type="text" name="last" placeholder="Nama Belakang" required/></td></tr>
	<tr><td><label>Alamat</label></td><td><input type="text" name="alamat" placeholder="Alamat" required /></td></tr>
	<tr><td><label>No Telp</label></td><td><input type="text" name="telp" placeholder="No Telp" required /></td></tr>
	<tr><td><label>Setoran Awal</label></td><td><input type="text" name="setoran" placeholder="Setoran" required /></td></tr>
	<tr><td><input type="submit" value="Daftar"/></td></tr>
</table>
</div>
<br/><br/>
<style> 
#formnas{
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
