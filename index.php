<?php
// Ambil nama halaman yang diminta dari URL
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Tentukan path ke halaman yang diminta
$pagePath = __DIR__ . '/pages/' . $page . '.html';

// Periksa apakah file halaman ada
if (file_exists($pagePath)) {
    // Tampilkan halaman yang diminta
    include_once($pagePath);
} else {
    // Tampilkan halaman 404 jika halaman tidak ditemukan
    include_once(__DIR__ . '/pages/404.html');
}
?>