<h2>Jadwal Vaksinasi</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tanggal </th>
              <th scope="col">Vaksin</th>
              <th scope="col">Dosis Vaksin</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Daerah</th>
              <th scope="col">Alamat</th>
              <th scope="col">Program</th>
            </tr>
          </thead>
          <tbody>
            <?php 
      $no = 1;
      $query = $koneksi->query("SELECT * FROM jadwal_vaksinasi JOIN vaksin ON jadwal_vaksinasi.id_vaksin=vaksin.id_vaksin");
      while($data = $query->fetch_assoc()){
    ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data['tanggal']; ?></td>
              <td><?php echo $data['nama_vaksin']; ?></td>
              <td><?php echo $data['dosis_vaksin']; ?></td>
              <td><?php echo $data['lokasi']; ?></td>
              <td><?php echo $data['provinsi_kota']; ?></td>
              <td><?php echo $data['alamat']; ?></td>
              <td><?php echo $data['program']; ?></td>
              <td width="140px">
        <a class="btn btn-info mr-2" href="index.php?halaman=editjadwal&id=<?php echo $data['id_jadwal']; ?>">Edit</a>
        <a class="btn btn-danger" href="index.php?halaman=vaksinasi&id=<?php echo $data['id_jadwal']; ?>">+</a>
      </td>
              <?php
      $no++;
      }
    ?>
            </tr>
            
          </tbody>
        </table>
      </div>