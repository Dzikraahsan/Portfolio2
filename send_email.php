<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Composer autoload

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $message = $_POST['message']; // atau $_POST['message'] jika itu yang dipakai di form HTML

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['EMAIL_USERNAME'];
        $mail->Password = $_ENV['EMAIL_PASSWORD'];
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom($_ENV['EMAIL_USERNAME'], 'Website Anda');
        $mail->addAddress('dzikraahsan4@email.com');

        $mail->isHTML(true);
        $mail->Subject = 'Pesan Baru dari Website';
        $mail->Body    = "Nama: $nama<br>Email: $email<br><br>Pesan:<br>$message";

        $mail->send();
        echo "Pesan berhasil dikirim.";
    } catch (Exception $e) {
        echo "Pesan gagal dikirim. Error: {$mail->ErrorInfo}";
    }
}
?>
