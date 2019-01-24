<table cellpadding=3px cellspacing=1px border=1px>
	<tr>
		<th>Ktp</th>
		<th>Username</th>
		<th>No Rekening</th>
		<th>Nama Nasabah</th>
		<th>Action</th>
	</tr>
	<?php
	foreach($row as $field){
		?>	
		<tr>
		<td><?php echo $field->Ktp; ?></td>
		<td><?php echo $field->Username; ?></td>
		<td><?php echo $field->No_rek; ?></td>
		<td><?php echo $field->Nama_depan." ".$field->Nama_belakang; ?></td>
		<td><a href="delete/<?php echo $field->Username; ?>">Hapus</a></td>
		</tr>
		<?php 
	} 
	?>
</table>