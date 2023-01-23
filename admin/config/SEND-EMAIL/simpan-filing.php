<!-- <?php
include "koneksi.php";
 
//  use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;

include "SEND-EMAIL/vendor/phpmailer/phpmailer/src/PHPMailer.php"; 
include "SEND-EMAIL/vendor/phpmailer/phpmailer/src/SMTP.php"; 
include "SEND-EMAIL/vendor/phpmailer/phpmailer/src/Exception.php";
include "SEND-EMAIL/vendor/autoload.php";

$nama_tujuan = mysqli_escape_string($connn, $_POST['nama_tujuan']);
$email_tujuan = mysqli_escape_string($connn, $_POST['email_tujuan']);

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->SMTPDebug = 3;                               

$mail->isSMTP();                                   

$mail->Host = "localhost";
$mail->SMTPAuth = true;                            
$mail->Username = "appdownload1204@gmail.com";                 
$mail->Password = "1204_Download";                           
$mail->SMTPSecure = "smtp";                           
$mail->Port = 465;                                   
$mail->From = "appdownload1204@gmail.com";
$mail->FromName = "FIKTI E-SPORTS EXPERIENCE 2021";
$mail->addAddress("lorddellons@gmail.com", "Rian Bayu");
$mail->isHTML(true);
$mail->Subject = "Konfirmasi Workshop ''Be a Professional Gamers'' ";
$mail->Body = "Terima kasih telah mendaftar di acara Workshop “Be a Professional Gamers” MOBILE LEGENDS FEX 2021. 
                <br> 
                Melalui email ini kami menyampaikan bahwa Anda telah terdaftar untuk mengikuti rangkaian Workshop tersebut.
                <br>
                Mengingatkan kembali bahwa rangkaian acara akan berlangsung pada:
                <br>
                <br>
                <table>
                    <tr>
                        <td>Hari, Tanggal</td>
                        <td>:</td>
                        <td>Rabu, 10 Maret 2021</td>
                    </tr>
                    <tr>
                        <td>Waktu</td>
                        <td>:</td>
                        <td>08.45 - Selesai</td>
                    </tr>
                    <tr>
                        <td>Tempat</td>
                        <td>:</td>
                        <td>Zoom Cloud Meetings</td>
                    </tr>
                </table>
                <br>
                Link Zoom Cloud Meetings untuk acara akan dikirimkan setelah pembayaran yang telah Anda lakukan terkonformasi dan tervalidasi.
                <br>
                Terima Kasih.";
    
    if(!$mail->send()){
        echo "Mailer Error: " . $mail->ErrorInfo;
        }else{ 
            $nama = mysqli_escape_string($con, $_POST['nama']);
            $email = mysqli_escape_string($con, $_POST['email']);
            $npm = mysqli_escape_string($con, $_POST['npm']);
            $kelas = mysqli_escape_string($con, $_POST['kelas']);
            $jurusan = mysqli_escape_string($con, $_POST['jurusan']);
            $alamat = mysqli_escape_string($con, $_POST['alamat']);
            $pilihan_pembayaran= mysqli_escape_string($con, $_POST['pilihan_workshop']);
            $pilihan_pembayaran= mysqli_escape_string($con, $_POST['pilihan_pembayaran']);
            // $email = mysqli_escape_string($con, $_POST['email']);
            // $no_hp = mysqli_escape_string($con, $_POST['no_hp']);
            // $workshop = mysqli_escape_string($con, $_POST['workshop']);
            
            $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
            $file_tmp = $_FILES['bukti_pembayaran']['tmp_name'];
            
            if(isset($_POST['submit'])) {
                @move_uploaded_file($file_tmp, "../../../users/assets/bukti_pembayaran/".$bukti_pembayaran);
                
                $query = mysqli_query($con, "INSERT INTO data_user(nama, email, npm, kelas, alamat, pilihan_workshop, pilihan_pembayaran, bukti_pembayaran, stat) 
                            VALUES ( '$nama', '$email' ,'$npm', '$kelas', '$jurusan', '$alamat', '$pilihan_workshop', '$pilihan_pembayaran,, '$bukti_pembayaran', 0)" );
                
                if ($query) {
                    echo "<script>alert('Terimakasih Telah Mendaftar'); 
                    location.href='../';</script>";
                }
            }else{
                echo "Gagal";
            }
} 
?>
-->
<?php
include "../koneksi.php";
 
// use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require "vendor/phpmailer/phpmailer/src/PHPMailer.php"; 
require "vendor/phpmailer/phpmailer/src/SMTP.php"; 
require "vendor/phpmailer/phpmailer/src/Exception.php";
require "vendor/autoload.php";

$nama_tujuan = mysqli_escape_string($connn, $_POST['nama_tujuan']);
$email_tujuan = mysqli_escape_string($connn, $_POST['email_tujuan']);
$id_u = mysqli_real_escape_string($connn, $_POST['id_u']);

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->SMTPDebug = 3;                               

$mail->isSMTP();                                   

$mail->Host = "fex2021.com";
$mail->SMTPAuth = true;                            
$mail->Username = "_mainaccount@fex2021.com";                 
$mail->Password = "6n7n16cUQp";                           
$mail->SMTPSecure = "ssl";                           
$mail->Port = 465;                                   
$mail->From = "_mainaccount@fex2021.com";
$mail->FromName = "FIKTI E-SPORTS EXPERIENCE 2021";
$mail->addAddress($email_tujuan, $nama_tujuan);
$mail->isHTML(true);

$mail->Subject = "Konfirmasi Workshop ''Be a Professional Gamers'' ";
$mail->Body = " Terima kasih telah mendaftar di Workshop PUBG MOBILE Be a Professional Gamers yang diselenggarakan oleh FIKTI E-Sports Experience 2021. 
                <br>
                Workshop akan dimulai pada :
                <br>

                <table>
                    <tr>
                        <td>Hari, Tanggal</td>
                        <td>:</td>
                        <td>Rabu, 10 Maret 2021</td>
                    </tr>
                    <tr>
                        <td>Waktu</td>
                        <td>:</td>
                        <td>12.45 - Selesai</td>
                    </tr>
                    <tr>
                        <td>Tempat</td>
                        <td>:</td>
                        <td>Zoom Cloud Meetings</td>
                    </tr>
                </table>
                <br>
                
                Silahkan klik link dibawah ini untuk bergabung dengan Grup line
                <table>
                    <tr>
                        <td>Link</td>
                        <td>:</td>
                        <td>https://line.me/R/ti/g/rHUP8DGVp6</td>
                    </tr>
                </table>
                <br>

                Anda dapat menggunakan iOS, atau Android untuk bergabung dengan grup line.
                <br>

                Catatan:
                <ul>
                    <li> Link ini tidak dapat Anda bagikan pada orang lain.</li>
                    <li> Gunakan nama asli Anda yang telah terdaftar pada saat registrasi.</li>
                </ul>
                <br>

                Untuk informasi lebih lanjut dapat menghubungi contact person kami :
                <br>
                <br>
                Tsamara
                <table>
                    <tr>
                        <td>WhatsApp</td>
                        <td>:</td>
                        <td>081298650583</td>
                    </tr>
                    <tr>
                        <td>LINE</td>
                        <td>:</td>
                        <td>tsmrhsnfdyh</td>
                    </tr>
                </table>
                
                <br>
                Media sosial kami :
                <br>
                <table>
                    <tr>
                        <td>Line</td>
                        <td>:</td>
                        <td>@865ikgvt</td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td>:</td>
                        <td>@fosc_ug</td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>:</td>
                        <td>fosc.bemfikti@gmail.com</td>
                    </tr>
                </table>

                <br>

                Website Kami :
                <br>
                https://fex2021.com/
                <br>
                <br>

                FEX 2021
                <br>
                Presented by FOSC
                <br>
                <br>
                
                Bergerak Maju,
                <br>
                Semangat Baru.
                <br>
                <br>
                
                Departemen Olahraga
                <br>
                BEM FIKTI UG 2020/2021
                <br>
                fikti.bem.gunadarma.ac.id";

if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{

    $queries = mysqli_query($con, "UPDATE data_user SET stat = 1 WHERE id = $id");

    echo "<script>alert('Has Been Approved'); 
    location.href='../../page/workshop/pubgm.php';</script>";
}