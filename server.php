<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama'] ?? '');
    if (empty($nama)) {
        echo "<span class='error'>Nama tidak boleh kosong!</span>";
    } else {
        echo "Halo, " . htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') . "! Selamat datang di AJAX!";
    }
} else {
    echo "<span class='error'>Hanya menerima permintaan POST.</span>";
}
?>
