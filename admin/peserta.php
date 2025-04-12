<h2>Data Pendaftar</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama </th>
              <th scope="col">NIK</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Nomor Hp</th>
              <th scope="col">Alamat</th>
            </tr>
          </thead>
          <tbody>
            <?php 
      $no = 1;
      $query = $koneksi->query("SELECT * FROM data_pendaftar");
      while($data = $query->fetch_assoc()){
    ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data['nama_pendaftar']; ?></td>
              <td><?php echo $data['no_pengenal']; ?></td>
              <td><?php echo $data['tanggal_lahir']; ?></td>
              <td><?php echo $data['no_hp']; ?></td>
              <td><?php echo $data['alamat']; ?></td>
              <td width="140px">
        <a class="btn btn-info mr-2" href="index.php?halaman=editpeserta&id=<?php echo $data['id_pendaftar']; ?>">Edit</a>
        <a class="btn btn-danger" href="index.php?halaman=hapuspeserta&id=<?php echo $data['id_pendaftar']; ?>">-</a>
      </td>
              <?php
      $no++;
      }
    ?>
            </tr>
            
          </tbody>
        </table>
      </div>