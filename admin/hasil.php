<h2>Hasil Tes Covid</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama </th>
              <th scope="col">NIK/Paspor</th>
              <th scope="col">Status PCR</th>
              <th scope="col">Tanggal PCR</th>
              <th scope="col">Status Antigen</th>
              <th scope="col">Tanggal Antigen</th>
            </tr>
          </thead>
          <tbody>
            <?php 
      $no = 1;
      $query = $koneksi->query("SELECT * FROM tes_covid");
      while($data = $query->fetch_assoc()){
    ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['no_pengenal']; ?></td>
              <td><?php echo $data['status_pcr']; ?></td>
              <td><?php echo $data['tanggal_pcr']; ?></td>
              <td><?php echo $data['status_antigen']; ?></td>
              <td><?php echo $data['tanggal_antigen']; ?></td>
              <?php
      $no++;
      }
    ?>
            </tr>
            
          </tbody>
        </table>
      </div>