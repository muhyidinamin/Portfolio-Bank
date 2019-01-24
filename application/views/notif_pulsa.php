<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th bgcolor="blue" color="white" colspan="3">ISI ULANG PULSA TELAH BERHASIL</th></tr>
	<tr>
		<td>Nomor Transaksi</td><td> : </td><td><?php echo $no; ?></td></tr>
	<tr>
		<td>Tanggal - Jam</td><td> : </td><td><?php echo $tgl; ?></td></tr>
	<tr>
		<td>No Telpon</td><td> : </td><td><?php echo $telp; ?></td></tr>
	<tr>
		<td colspan="3" align="left">Jumlah</td></tr>
	<tr>
		<td>Nominal Transfer</td><td> : </td><td align="right"><?php echo "Rp.".$nominal; ?></td></tr>
	<tr>
		<td>Biaya Isi Ulang</td><td> : </td><td align="right">Rp. 0</td></tr>
	<tr>
		<td>Total</td><td> : </td><td align="right"><?php $nominal = $nominal+0; echo 'Rp.'. $nominal; ?></td></tr>
	<tr>
	<tr><td colspan="3">
		<a href="<?php echo base_url('E_banking/tampil_mutasi');?>"><button>Cek Mutasi</button></a></td></tr>
</table>
<br>
<br>