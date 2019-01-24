<?php
	foreach($row as $field){
?>

<table>
<tr><td>No Rekening </td><td>:</td><td><?php echo $field->No_rek; ?></td></tr>
<tr><td>Nama</td><td>:</td><td><?php echo $field->Nama_depan." ".$field->Nama_belakang; ?></td></tr>
<tr><td>Nama Bank   </td><td>:</td><td>Central Bank</td></tr>

<tr><td>Nominal Transfer</td><td>:</td><td><?php echo "Rp. ".$this->session->userdata('nominal'); ?></td></tr>

<tr><td colspan='3'>Apakah anda Yakin ?</td></tr>

<tr><td><input type="button" value="Batal" onclick="javascript:history.go(-1)" /></td><td>

</td><td><a href='proses_transfer'><button class='#' type='submit'>Setuju</button></a></td></tr></table>

<?php } ?>