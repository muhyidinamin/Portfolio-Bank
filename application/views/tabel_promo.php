    <p>	<table border = '2' >
			<tr> <td bgcolor="magenta" colspan = '2'> <center> <b> Promo Bulan Ini  </b> </center> </td> </tr>
    <?php foreach ($row as $field) { ?>
			<tr> <td bgcolor='magenta' colspan = '2'> <center><?php echo $field->Judul; ?></center> </td> </tr>
			
	
			<tr><td bgcolor='#CCFF33'> <img src="<?php echo base_url();?>assets/img/<?php echo $field->Gambar; ?>" height =200 width=250> </td>
			<td bgcolor="#CCFF33"><?php echo $field->Deskripsi; ?>

			</td> </tr>
    <?php } ?>
		</table>