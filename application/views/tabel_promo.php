    <p>	<table border = '2' >
			<tr bgcolor="#339933"> <td colspan = '2'> <center> <b> Promo Bulan Ini  </b> </center> </td> </tr>
    <?php foreach ($row as $field) { ?>
			<tr bgcolor="#40bf40"> <td colspan = '2'> <center><?php echo $field->Judul; ?></center> </td> </tr>
			
	
			<tr><td> <img src="<?php echo base_url();?>assets/img/<?php echo $field->Gambar; ?>" height =200 width=250> </td>
			<td><?php echo $field->Deskripsi; ?>

			</td> </tr>
    <?php } ?>
		</table>