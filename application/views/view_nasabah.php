 <table border="1">
        
        <tr>
            <th>No KTP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>No Rekening</th>
        </tr>
    
    <tbody>
            <?php
               if($result->num_rows()>0){
					foreach($result->result_array()as $row){
						echo $row['username']; echo $row['email'];
					}
				}

        ?>
            <tr>
            <td><?php echo $user->nama_lengkap; ?></td>
            <td><?php echo $user->username; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->alamat; ?></td>
        </tr>
           <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Email</th>
            <th>Alamat</th>
        </tr>
    </tfoot>
    </table>