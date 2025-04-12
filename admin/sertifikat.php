<h2>Data Pendaftar</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama </th>
              <th scope="col">NIK</th>
              <th scope="col">Status Vaksin</th>
              <th scope="col">Sertifikat</th>
            </tr>
          </thead>
          <tbody>
            <?php 
      $no = 1;
$query=$koneksi->query("SELECT * FROM vaksinasi JOIN data_pendaftar ON vaksinasi.id_pendaftar=data_pendaftar.id_pendaftar");

      while($data = $query->fetch_assoc()){
    ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data['nama_pendaftar']; ?></td>
              <td><?php echo $data['no_pengenal']; ?></td>
              <td><?php echo $data['status_vaksin']; ?></td>
              <td><?php echo $data['sertifikat']; ?></td>
              <td width="140px">
        <a class="btn btn-info mr-2" href="index.php?halaman=inputsertifikat&id=<?php echo $data['id_vaksinasi']; ?>">Sertifikat +</a>
      </td>
              <?php
      $no++;
      }
    ?>
            </tr>
            
          </tbody>
        </table>
      </div>