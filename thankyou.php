<?php

$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Penguna';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih!:)</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="bg-primary text-white text-center py-4">
        <h1>Terima Kasih telah mengirim feedback kamu:))</h1>
        <p>Pesan kamu telah berhasil kami terima. Kami sangat berterima kasih dan akan mendengarkan pesan-pesan kamu:))</p>
    </header>

    <div class="container mt-4">
        <h3>Terima Kasih, <?php echo $name; ?>, atas feedback kamu!:))</h3>
        <p>Kami sangat menghargai waktu yang Anda luangkan untuk memberikan pesan:).</p>
    </div>
    
    <footer class="bg-dark text-white text-center py-3">
        Learning Labs 2024 L0124003 Aprilia Alfa Gusasti Ciptaningtyas
    </footer>
    
</body>
</html>