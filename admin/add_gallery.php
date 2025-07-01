<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id" class="dark">

<head>
    <meta charset="UTF-8">
    <title>Tambah Gambar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        };
    </script>
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 shadow p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-blue-700 dark:text-blue-300">TAMBAH GALLERY</h1>
        <ul class="flex space-x-4 items-center">
            <li><a href="beranda_admin.php" class="hover:text-blue-600 dark:hover:text-blue-400">Beranda</a></li>
            <li><a href="about.php" class="hover:text-blue-600 dark:hover:text-blue-400">Tentang</a></li>
            <li><a href="data_artikel.php" class="hover:text-blue-600 dark:hover:text-blue-400">Artikel</a></li>
            <li><a href="data_gallery.php" class="hover:text-blue-600 dark:text-blue-300 font-semibold">Gallery</a></li>
            <li><a href="data_contact.php" class="hover:text-blue-600 dark:hover:text-blue-400">Kontak</a></li>
            <li>
                <a href="logout.php" onclick="return confirm('Yakin ingin keluar?');"
                    class="text-red-500 hover:underline">Logout</a>
            </li>
            <li>
                <!-- Tombol dark mode -->
                <button onclick="toggleDarkMode()" class="ml-4 bg-gray-300 dark:bg-gray-600 text-sm px-2 py-1 rounded">
                    🌙
                </button>
            </li>
        </ul>
    </nav>

    <!-- Container -->
    <div class="max-w-5xl mx-auto mt-10 bg-white dark:bg-gray-800 p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-6 text-blue-700 dark:text-blue-300 text-center">Tambah Gambar ke Gallery</h2>

        <form action="proses_add_gallery.php" method="post" enctype="multipart/form-data" class="space-y-6">
            <div>
                <label for="judul" class="block text-sm font-medium mb-1">Judul Gambar</label>
                <input type="text" id="judul" name="judul" required
                    class="w-full p-2 border rounded bg-gray-50 dark:bg-gray-700 dark:border-gray-600 focus:outline-none focus:ring focus:border-blue-500">
            </div>
            <div>
                <label for="foto" class="block text-sm font-medium mb-1">Pilih Gambar</label>
                <input type="file" id="foto" name="foto" accept="image/*" required
                    class="w-full text-sm text-gray-600 dark:text-gray-200 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200">
            </div>
            <div class="flex justify-end space-x-4">
                <button type="submit"
                    class="bg-blue-700 dark:bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-800 dark:hover:bg-blue-500 transition">
                    Simpan
                </button>
                <a href="data_gallery.php"
                    class="bg-gray-300 dark:bg-gray-600 text-gray-700 dark:text-white px-4 py-2 rounded hover:bg-gray-400 dark:hover:bg-gray-500 transition">
                    Batal
                </a>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-800 dark:bg-blue-900 text-white text-center py-6 mt-10">
        <div class="flex justify-center space-x-6 mb-4">
            <!-- Instagram -->
            <a href="https://www.instagram.com/ardi_air?igsh=c2RmYzRhcmpqd3Jl" target="_blank"
                class="hover:scale-110 transition-transform">
                <!-- SVG Instagram -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-6 h-6">
                    <path
                        d="M7 2C4.243 2 2 4.243 2 7v10c0 2.757 2.243 5 5 5h10c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5H7zm10 2c1.654 0 3 1.346 3 3v10c0 1.654-1.346 3-3 3H7c-1.654 0-3-1.346-3-3V7c0-1.654 1.346-3 3-3h10zM12 7a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-3a1.5 1.5 0 110 3 1.5 1.5 0 010-3z" />
                </svg>
            </a>
            <!-- GitHub -->
            <a href="https://github.com/ardiilahiroby/portfolio-tailwind-css" target="_blank"
                class="hover:scale-110 transition-transform">
                <!-- SVG GitHub -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-6 h-6">
                    <path
                        d="M12 .5C5.648.5.5 5.648.5 12c0 5.078 3.291 9.391 7.863 10.922.575.103.785-.25.785-.556v-2.162c-3.196.695-3.872-1.385-3.872-1.385-.522-1.326-1.275-1.678-1.275-1.678-1.044-.713.079-.698.079-.698 1.155.08 1.763 1.186 1.763 1.186 1.026 1.757 2.694 1.25 3.35.956.105-.743.401-1.25.729-1.538-2.552-.29-5.237-1.276-5.237-5.678 0-1.254.448-2.277 1.184-3.078-.119-.29-.512-1.455.113-3.034 0 0 .964-.309 3.16 1.176A11.007 11.007 0 0112 5.833c.978.004 1.962.132 2.881.39 2.194-1.485 3.156-1.176 3.156-1.176.627 1.579.234 2.744.115 3.034.738.801 1.182 1.824 1.182 3.078 0 4.412-2.689 5.385-5.251 5.669.414.357.785 1.062.785 2.14v3.173c0 .31.208.666.791.553C20.214 21.387 23.5 17.07 23.5 12 23.5 5.648 18.352.5 12 .5z" />
                </svg>
            </a>
            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/in/ardi-ilahi-roby-3746b224a" target="_blank"
                class="hover:scale-110 transition-transform">
                <!-- SVG LinkedIn -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-6 h-6">
                    <path
                        d="M19 0h-14C2.243 0 0 2.243 0 5v14c0 2.757 2.243 5 5 5h14c2.757 0 5-2.243 5-5V5c0-2.757-2.243-5-5-5zM7.13 19H4.47V9h2.66v10zm-1.33-11.15a1.54 1.54 0 110-3.08 1.54 1.54 0 010 3.08zM20 19h-2.66v-5.25c0-1.25-.02-2.85-1.74-2.85s-2.01 1.36-2.01 2.76V19h-2.66V9h2.56v1.37h.04c.36-.68 1.26-1.39 2.59-1.39 2.77 0 3.28 1.82 3.28 4.18V19z" />
                </svg>
            </a>
            <!-- WhatsApp -->
            <a href="https://wa.me/qr/JUM66GUQ26MEL1" target="_blank" class="hover:scale-110 transition-transform">
                <!-- SVG WhatsApp -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 448 512" class="w-6 h-6">
                    <path
                        d="M380.9 97.1C339-20.9 191.3-32.5 118.6 51.1 55.2 123.7 68.8 223.3 68.8 223.3S63 276.7 32.7 322.7c0 0-8 11.8-1.6 19.3 6.6 7.7 24.6 13.5 29.3 13.6 5.5.1 13.4-7.6 13.4-7.6s48.3-30.1 67.7-41.7c41.1 25.6 104.1 50.5 165.4 18.8C409.3 274.2 440.7 140.6 380.9 97.1zM239.4 339.6c-42.2 0-89.6-23.3-127.3-67.4l-11.7-14c-11.7-13.8-19.8-26.3-26.5-39.7-3.6-7.2-3.2-12.3.9-16.1l21.4-21.4c3.7-3.6 8.7-4.2 15.2-1.6 8.4 3.3 20.3 9.4 35.1 17.3 13.8 7.2 18.4 9.2 21.1 9.7 4.1.7 7.7-1.5 9.2-4.4 3.7-6.8 14.3-25.7 16.3-29.5 1.4-2.6 2.3-5.6 1.1-9.6-.9-3.1-8.4-19.3-10.7-24.2-3.5-7.4-7.4-9.5-11.9-9.8-4.6-.3-8.8.2-12.8 2.6-4 2.3-23.5 16.6-27.3 19.3-3.6 2.6-7.1 3.2-11.4 1.5-4.6-1.9-28.1-10.6-43.4-23.4-15.2-12.8-18.1-29.2-18.6-31.7-.5-2.6-1.5-6.6-1.7-8.6-.4-3.8.7-6.6 3.5-9.4 2.9-2.8 6.3-4.5 10.5-4.7 9.6-.6 24.1-.3 45.5 8.8 28.5 12.3 41.7 28.5 46.6 35.3 5.4 7.6 9.6 15.8 14.3 24.5 8.6 15.5 16.6 29.6 28.9 44.7 22.2 27.1 48.4 45.6 78.6 54.5 28.4 8.2 57.4 5.3 84.2-8.6 27.1-14.1 46.8-38.5 53.5-71.4 7.4-35.6-.2-68.3-19.6-95.5z" />
                </svg>
            </a>
            <!-- TikTok -->
            <a href="https://www.tiktok.com/@ardiilahiroby_12" target="_blank"
                class="hover:scale-110 transition-transform">
                <!-- SVG TikTok -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-6 h-6">
                    <path
                        d="M12.75 2h2.438c.106 1.346.736 2.482 1.727 3.24a5.536 5.536 0 003.085 1.064v2.48a7.925 7.925 0 01-4.812-1.549v7.837a6.75 6.75 0 11-6.75-6.75c.3 0 .593.027.875.075v2.54a4.125 4.125 0 104.125 4.125V2z" />
                </svg>
            </a>
            <!-- YouTube -->
            <a href="https://youtube.com/@ardiilahiroby12" target="_blank" class="hover:scale-110 transition-transform">
                <!-- SVG YouTube -->
                <svg class="w-6 h-6" fill="white" viewBox="0 0 576 512">
                    <path
                        d="M549.7 124.1c-6.3-23.8-25-42.5-48.8-48.8C458.3 64 288 64 288 64S117.7 64 75.1 75.3c-23.8 6.3-42.5 25-48.8 48.8C16 166.7 16 256 16 256s0 89.3 10.3 131.9c6.3 23.8 25 42.5 48.8 48.8C117.7 448 288 448 288 448s170.3 0 212.9-11.3c23.8-6.3 42.5-25 48.8-48.8C560 345.3 560 256 560 256s0-89.3-10.3-131.9zM232 336V176l142.7 80L232 336z" />
                </svg>
            </a>
        </div>

        <p class="text-sm">&copy; <?php echo date('Y'); ?> | Created by Ardi Ilahi Roby</p>
    </footer>

    <!-- Script Dark Mode -->
    <script>
        function toggleDarkMode() {
            const htmlElement = document.documentElement;
            htmlElement.classList.toggle('dark');
            localStorage.setItem('theme', htmlElement.classList.contains('dark') ? 'dark' : 'light');
        }

        document.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.documentElement.classList.add('dark');
            }
        });
    </script>

</body>

</html>