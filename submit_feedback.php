<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Mengarahkan ke halaman terima kasih dengan nama pengguna
    header("Location: thankyou.php?name=" . urlencode($name));
    exit();
}
?>
