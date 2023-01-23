<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="table-responsive">
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>ID Line</th>
                <th>No Wa</th>
                <th>Pilihan Workshop</th>
                <th>Identitas Diri</th>
                <th>Pilihan Pembayaran</th>
                <th>Bukti Pembayaran</th>
                <th>Tanggal</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  
                  $no = 1;
                  $query = mysqli_query($con, "SELECT * FROM `data_user` WHERE stat = 1 ");
                  while ($data = mysqli_fetch_array($query)) {
                    $id = $data['id'];
                    $nama = $data['nama'];
                    $email = $data['email'];
                    $npm= $data['npm'];
                    $kelas = $data['kelas'];
                    $jurusan = $data['jurusan'];
                    $id_line = $data['id_line'];
                    $no_wa = $data['no_wa'];
                    $pilihan_workshop = $data['pilihan_workshop'];
                    $identitas_diri = $data['identitas_diri'];
                    $pilihan_pembayaran = $data['pilihan_pembayaran'];
                    $bukti_pembayaran = $data['bukti_pembayaran'];
                    $date = $data['date'];
                  ?>
              <tr>
                <form action="config/approve-filing/filing-approve.php" method="post">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <input type="hidden" name="email" value="<?php echo $email; ?>">
                  <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                  <td><?=$no?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($con,$nama));?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($con,$email));?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($con,$npm));?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($con,$kelas));?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($con,$jurusan));?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($con,$id_line));?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($con,$no_wa));?></td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($con,$pilihan_workshop));?></td>
                  <td>
                    <a href="<?php echo "../users/assets/identitas_diri/".$identitas_diri ?>" download>
                      <img src="<?php echo "../users/assets/identitas_diri/".$identitas_diri ?>"
                        style="width: 100px; height: 100px;">
                    </a>
                  </td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($con,$pilihan_pembayaran));?></td>
                  <td>
                    <a href="<?php echo "../users/assets/bukti_pembayaran/".$bukti_pembayaran ?>" download>
                      <img src="<?php echo "../users/assets/bukti_pembayaran/".$bukti_pembayaran ?>"
                        style="width: 100px; height: 100px;">
                    </a>
                  </td>
                  <td><?=htmlspecialchars(mysqli_real_escape_string($con,$date));?></td>
                </form>
              </tr>
              <?php
                          $no++;
                          };
                          ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>