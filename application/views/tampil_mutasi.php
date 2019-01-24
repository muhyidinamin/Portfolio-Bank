<table cellpadding=3px cellspacing=1px border=1px>
	<tr>
		<th>No Rekening</th>
		<th>Transaksi</th>
		<th>Tanggal</th>
		<th>Status</th>
		<th>Nilai</th>
	</tr>
	<?php
	foreach($row as $field){
		?>	
		<tr>
		<td><?php echo $field->No_rek; ?></td>
		<td><?php echo $field->Transaksi; ?></td>
		<td><?php echo $field->Tgl; ?></td>
		<td><?php echo $field->Status; ?></td>
		<td><?php echo $field->Nilai; ?></td>
		</tr>
		<?php 
	} 
	?>
</table>