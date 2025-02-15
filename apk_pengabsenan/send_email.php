<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $pesan = htmlspecialchars($_POST["message"]);

    $to = "mohammad.fadhil2371@smk.belajar.id";
    $subject = "Pesan dari $nama";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8\r\n";

    $body = "Nama: $nama\nEmail: $email\n\nPesan:\n$pesan";

    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim.";
    } else {
        echo "Gagal mengirim pesan.";
    }
} else {
    echo "Akses tidak diizinkan!";
}
?>
