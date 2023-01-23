<?php

    include "koneksi.php";

    if (isset($_POST['send'])) {
        
        $email              = mysqli_real_escape_string($con, $_POST['email']);
        $npm                = mysqli_real_escape_string($con, $_POST['npm']);
        $nama               = mysqli_real_escape_string($con, $_POST['nama']);
        $kelas              = mysqli_real_escape_string($con, $_POST['kelas']);
        $jurusan            = mysqli_real_escape_string($con, $_POST['jurusan']);
        $id_line            = mysqli_real_escape_string($con, $_POST['id_line']);
        $no_wa              = mysqli_real_escape_string($con, $_POST['no_wa']);
        $pilihan_workshop   = mysqli_real_escape_string($con, $_POST['pilihan_workshop']);

        $nomor_acak1 = round(microtime(true));
        $foto1 = $_FILES['identitas_diri']['name'];
        $tipe_foto1 = $_FILES['identitas_diri']['type'];
        $file_tmp1 = $_FILES['identitas_diri']['tmp_name'];
        $file_size1 = $_FILES['identitas_diri']['size'];
        $foto_baru1 = $nomor_acak1. '_' .$foto1;

        $pilihan_pembayaran = mysqli_real_escape_string($con, $_POST['pilihan_pembayaran']);

        $nomor_acak2 = round(microtime(true));
        $foto2 = $_FILES['bukti_pembayaran']['name'];
        $tipe_foto2 = $_FILES['bukti_pembayaran']['type'];
        $file_tmp2 = $_FILES['bukti_pembayaran']['tmp_name'];
        $file_size2 = $_FILES['bukti_pembayaran']['size'];
        $foto_baru2 = $nomor_acak2. '_' .$foto2;

        $insert_data     = mysqli_query($con, "INSERT INTO `data_user` (email,npm,nama,kelas,jurusan,id_line,no_wa,pilihan_workshop,identitas_diri,pilihan_pembayaran,bukti_pembayaran)
         VALUES ( '$email','$npm','$nama', '$kelas','$jurusan','$id_line','$no_wa','$pilihan_workshop','$foto_baru1','$pilihan_pembayaran', '$foto_baru2')");
        if ($insert_data) {
            if ($file_size1 && $file_size2 < 3000000) {
                if($tipe_foto1 && $tipe_foto2 == "image/jpeg" || $tipe_foto1 && $tipe_foto2  == "image/jpg"){
                    @move_uploaded_file($file_tmp1, "../assets/identitas_diri/".$foto_baru1);
                    @move_uploaded_file($file_tmp2, "../assets/bukti_pembayaran/".$foto_baru2);
                    echo"<script>alert('Berhasil....!!!');
                    location.href='../index.html';</script>";
                }else{
                    echo"<script>alert('Maaf format file berkas selain JPG/JPEG tidak di dukung');
                    location.href='../pendaftaran/index.php';</script>";
                }
            }else {
                echo"<script>alert('Gagal, ukuran foto harus dibawah 3 MB');
                location.href='../pendaftaran/index.php';</script>";
            }
        }else {
            echo "Gagal nambah data baru";
        }

    }

?>