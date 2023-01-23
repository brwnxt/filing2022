<?php
include "../koneksi.php";
 
// use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require "../SEND-EMAIL/vendor/phpmailer/phpmailer/src/PHPMailer.php"; 
require "../SEND-EMAIL/vendor/phpmailer/phpmailer/src/SMTP.php"; 
require "../SEND-EMAIL/vendor/phpmailer/phpmailer/src/Exception.php";
require "../SEND-EMAIL/vendor/autoload.php";

$nama_tujuan = mysqli_escape_string($con, $_POST['nama']);
$email_tujuan = mysqli_escape_string($con, $_POST['email']);
$id = mysqli_real_escape_string($con, $_POST['id']);

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->SMTPDebug = 3;                               

$mail->isSMTP();                                   

$mail->Host = "mail.filing22.my.id;103.28.53.75";
$mail->SMTPAuth = true;                            
$mail->Username = "alifganteng123@filing22.my.id";                 
$mail->Password = "alifgans123*";                           
$mail->SMTPSecure = "ssl";                           
$mail->Port = 465; 
$smtp_debug=true;
$mail->From = "ihsanulalif12@gmail.com";
$mail->FromName = "Filing 2022";
$mail->addAddress($email_tujuan, $nama_tujuan);
$mail->isHTML(true);

$mail->Subject = "Konfirmasi Pembayaran Workshop FILING 2022 ''Ready to Face Global Competition by Improving Data Science and Laravel Basic Skills'' ";
$mail->Body = "Selamat..., pendaftaran anda telah diterima. Terima kasih telah mendaftar Workshop FILING 2022 ''Ready to Face Global Competition by Improving Data Science and Laravel Basic Skills'' yang diselenggarakan oleh BEM FIKTI 2021/2022. 
                <br>

                Untuk informasi lebih lanjut dapat menghubungi contact person kami :
                <br>  
                <br>
                Data Science & Laavel Basic
                <br>  
                <br>
                Purti Dian Panita
                <table>
                    <tr>
                        <td>WhatsApp</td>
                        <td>:</td>
                        <td>087882800165</td>
                    </tr>
                    <tr>
                        <td>LINE</td>
                        <td>:</td>
                        <td>putridian.</td>
                    </tr>
                </table>
                
                <br>

                <br>

                Website Kami :
                <br>
                https://fikti.bem.gunadarma.ac.id/filing/users/
                <br>
                <br>

                FILING 2022
                <br>
                Presented by Departemen Akademik
                <br>
                <br>
                
                Kolaborasi,
                <br>
                Satukan Asa,
                <br>
                Wujudkan Bersama.
                <br>
                <br>
                
                Departemen Akademik
                <br>
                BEM FIKTI UG 2021/2022
                <br>
                fikti.bem.gunadarma.ac.id";

if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{

    $queries = mysqli_query($con, "UPDATE `data_user` SET stat = 1 WHERE id = '$id' ");

    echo "<script>alert('Account Has Been Approved'); 
    location.href='../../index.php';</script>";
}