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
                <th>No_Wa</th>
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
$query = mysqli_query($con, "SELECT * FROM `data_user`
WHERE stat = 2 ");
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
                <td><?php echo $no++; ?></td>
                <td>
                  <?php 
                            if ($bukti_pembayaran == NULL) {?>
                  <h5 class="mt-2 text-info">Nama Tim masih kosong</h5>
                  <?php } else { ?>
                  <?php echo $nama; ?>
                  <?php } ?>

                </td>
                <td><?php echo $email; ?></td>
                <td><?php echo $npm; ?></td>
                <td><?php echo $kelas; ?></td>
                <td><?php echo $jurusan; ?></td>
                <td><?php echo $id_line; ?></td>
                <td><?php echo $no_wa; ?></td>
                <td><?php echo $pilihan_workshop; ?></td>
                <td>
                  <?php 
                          if ($identitas_diri== NULL) {?>
                  <h5 class="mt-2">Belum Ada Identitas</h5>
                  <?php } else { ?>
                  <a href="<?php echo "../../user/assets/identitas_diri/".$identitas_diri; ?>" download>
                    <img src="<?php echo "../../user/assets/identitas_diri/".$identitas_diri; ?>"
                      style="width: 100px; height: 100px;">
                  </a>
                  <?php } ?>
                <td><?php echo $pilihan_pembayaran; ?></td>
                <td>
                  <?php 
                          if ($bukti_pembayaran== NULL) {?>
                  <h5 class="mt-2">Belum Ada Bukti</h5>
                  <?php } else { ?>
                  <a href="<?php echo "../../user/assets/bukti_pembayaran/".$bukti_pembayaran; ?>" download>
                    <img src="<?php echo "../../user/assets/bukti_pembayaran/".$bukti_pembayaran; ?>"
                      style="width: 100px; height: 100px;">
                  </a>
                  <?php } ?>
                </td>
                <td><?php echo $date; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          </div>
      </div>
    </div>
  </div>
</div>