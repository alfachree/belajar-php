<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@gmail.com';
    $mail->Password = 'app-password-16digit';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        die("Akses langsung tidak diperbolehkan.");
    }

    $name = !empty($_POST['name']) ? $_POST['name'] : 'Tidak ada nama';
    $email = !empty($_POST['email']) ? $_POST['email'] : 'Tidak ada email';
    $message = !empty($_POST['message']) ? $_POST['message'] : 'Tidak ada pesan';

    $mail->setFrom('your-email@gmail.com', 'Nama Anda');
    $mail->addAddress('mohammad.fadhil2371@smk.belajar.id');

    $mail->isHTML(true);
    $mail->Subject = 'Pesan dari Form Kontak';
    $mail->Body = "Nama: $name<br>Email: $email<br>Pesan: $message";

    $mail->send();
    echo 'Pesan berhasil dikirim!';
} catch (Exception $e) {
    echo "Gagal mengirim email. Error: " . htmlspecialchars($mail->ErrorInfo);
}
?>
