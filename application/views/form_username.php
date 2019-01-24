<table cellpadding=3px cellspacing=1px border=1px>
	<tr>
		<th>No Rekening</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Telephone</th>
	</tr>
	<?php
	foreach($data as $field){
		?>	
		<tr>
		<td><?php echo $field->No_rek;?></td>
		<td><?php echo $field->Nama_depan." ".$field->Nama_belakang; ?></td>
		<td><?php echo $field->Alamat; ?></td>
		<td><?php echo $field->No_telp; ?></td>
		</tr>
		<?php 
	} 
	?>
</table>


<h3>Daftar Akun E-Banking</h3>
<form action='pendaftaran' method='post'>
<div id="#">
<table>
	<tr><td><label>Username</label></td><td><input type="text" name="username" placeholder="Username" /></td></tr>
	<tr><td><label>Password</label></td><td><input type="password" name="password" placeholder="Password" /></td></tr>
	<!--<tr><td><label>Retype Password</label></td><td><input type="password" name="verifypass" placeholder="Retype Password" /></td></tr>-->
	<tr><td><input type="submit" value="Daftar"/></td></tr>
</table>
<span class="error"><strong>
</div>
</form>
