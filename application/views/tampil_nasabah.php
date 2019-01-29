
<table cellpadding=3px cellspacing=1px border=1px>
	<tr>
		<th>No KTP</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No Telp</th>
		<th>No Rekening</th>
	</tr>
	<?php
	foreach($row as $field){
		?>	
		<tr>
		<td><?php echo $field->Ktp; ?></td>
		<td><?php echo $field->Nama_depan." ".$field->Nama_belakang; ?></td>
		<td><?php echo $field->Alamat; ?></td>
		<td><?php echo $field->No_telp; ?></td>
		<td><?php echo $field->No_rek; ?></td>
		</tr>
		<?php 
	} 
	?>
</table>