<table cellpadding=3px cellspacing=1px border=1px>
	<tr>
		<th>Kode</th>
		<th>Mata Uang</th>
		<th>Jual</th>
		<th>Beli</th>
		<th>Action</th>
	</tr>
	<?php
	foreach($row as $field){
		?>	
		<tr>
		<td><?php echo $field->Kode; ?></td>
		<td><?php echo $field->Mata_uang; ?></td>
		<td><?php echo $field->Jual; ?></td>
		<td><?php echo $field->Beli; ?></td>
		<td><a href="update_kurs/<?php echo $field->Kode; ?>">Update</a></td>
		</tr>
		<?php 
	} 
	?>
</table>