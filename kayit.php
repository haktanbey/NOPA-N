<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nick    = htmlspecialchars($_POST['nick']);
    $discord = htmlspecialchars($_POST['discord']);
    $email   = htmlspecialchars($_POST['email']);
    $mesaj   = htmlspecialchars($_POST['mesaj']);

    $to      = "nopainmta@gmail.com";           // ← burayı değiştir
    $subject = "Yeni NoPain Klan Başvurusu - $nick";
    $body    = "Nick: $nick\nDiscord: $discord\nE-posta: $email\n\nMesaj:\n$mesaj";
    $headers = "From: nopainklan@siten.com\r\nReply-To: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2 style='color:#0f0; text-align:center;'>Başvuru alındı! Teşekkürler, en kısa zamanda bakıcaz.</h2>";
    } else {
        echo "<h2 style='color:#f33; text-align:center;'>Bir hata oldu, tekrar dene.</h2>";
    }
}
?>
