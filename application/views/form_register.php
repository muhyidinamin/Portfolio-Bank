<center><h2>PENDAFTARAN NASABAH BARU & E-BANK</h2></center>
<form action='Register/pilihan' method='post'>
<div id="formreg">
	<center><H3>PILIH PENDAFTARAN</H3></center>
	<hr/>
        <select name="pilihan" required>    
            <option value="nasabah">Nasabah</option>    
            <option value="userbanking">E-Banking</option>    
        </select>
	<input type="submit" value="Next" name='submit'/>
</div>
</form>
<br/><br/>
<style> 
#formreg{
	width: 320px;
    padding: 10px;
    border: 2px solid #4CAF50;
    margin: 0 380px;
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