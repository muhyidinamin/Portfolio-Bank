<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th bgcolor="blue" color="white" colspan="3">TRANSAKSI ANDA TELAH BERHASIL</th></tr>
	<tr>
		<td>Nomor Transaksi</td><td> : </td><td><?php echo $no; ?></td></tr>
	<tr>
		<td>Tanggal - Jam</td><td> : </td><td><?php echo $tgl; ?></td></tr>
	<tr>
		<td colspan="3" align="left">Rekening Pengirim</td></tr>
	<tr>
		<td>Nama Bank</td><td> : </td><td>CentralBank</td></tr>
	<?php foreach ($asal as $data ){ ?>
	<tr>
		<td>Nama Pengirim</td><td> : </td><td><?php echo $data->Nama_depan." ".$data->Nama_belakang; ?></td></tr>
	<tr>
		<td>No.Rekening</td><td> : </td><td><?php echo $data->No_rek; ?></td></tr>
	<?php } ?>
	<tr>
		<td colspan="3" align="left">Jumlah</td></tr>
	<tr>
		<td>Nominal Transfer</td><td> : </td><td align="right"><?php echo "Rp.".$nominal; ?></td></tr>
	<tr>
		<td>Biaya Transfer</td><td> : </td><td align="right">Rp. 0</td></tr>
	<tr>
		<td>Total</td><td> : </td><td align="right"><?php $nominal = $nominal+0; echo 'Rp.'. $nominal; ?></td></tr>
	<tr>
		<td colspan="3" align="left">Rekening Penerima</td></tr>
	<tr>
		<td>Nama Bank</td><td> : </td><td>CentralBank</td></tr>
	<?php foreach ($tujuan as $field ){ ?>
	<tr>
		<td>Nama Penerima</td><td> : </td><td><?php echo $field->Nama_depan." ".$field->Nama_belakang; ?></td></tr>
	<tr>
		<td>No.Rekening</td><td> : </td><td><?php echo $field->No_rek; ?></td></tr>
	<?php } ?>
	<tr><td colspan="3">
		<a href="<?php echo base_url('E_banking/tampil_mutasi');?>"><button>Cek Mutasi</button></a></td></tr>
</table>
<br>
<br>