<?php
// Start session ONLY if it hasn't been started yet
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISTA HOTEL • Kigali Luxury Redefined</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        :root {
            --primary: #d97706;
        }
        
        * {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 200ms;
        }
        
        body {
            font-family: 'Inter', system-ui, sans-serif;
        }
        
        h1, h2, h3 {
            font-family: 'Playfair Display', sans-serif;
        }
        
        .hero-bg {
            background: linear-gradient(rgba(15, 23, 42, 0.78), rgba(15, 23, 42, 0.85)), 
                        url('https://picsum.photos/id/1016/1920/1080') center/cover no-repeat fixed;
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -6px;
            left: 0;
            background-color: #d97706;
        }
        
        .nav-link:hover:after {
            width: 100%;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 70px;
            height: 4px;
            background: #d97706;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .card-hover:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.4);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-200">

    <!-- NAVBAR -->
    <nav class="bg-slate-900 border-b border-slate-800 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-amber-500 rounded-2xl flex items-center justify-center text-slate-900 font-bold text-3xl">V</div>
                    <div class="leading-none">
                        <span class="text-3xl font-bold tracking-tighter">VISTA</span>
                        <span class="text-amber-500 text-sm font-medium block -mt-1">HOTEL KIGALI</span>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-8 text-sm font-medium">
                    <a href="index.php" class="nav-link text-slate-300 hover:text-white">HOME</a>
                    <a href="about.php" class="nav-link text-slate-300 hover:text-white">ABOUT US</a>
                    <a href="menu.php" class="nav-link text-slate-300 hover:text-white">MENU</a>
                    <a href="gallery.php" class="nav-link text-slate-300 hover:text-white">GALLERY</a>
                    <a href="order.php" class="nav-link text-slate-300 hover:text-white">ORDER NOW</a>
                    <a href="contact.php" class="nav-link text-slate-300 hover:text-white">CONTACT</a>
                </div>

                <!-- Right Side -->
                <div class="flex items-center gap-4">
                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                        <a href="view_orders.php" 
                           class="px-6 py-3 bg-amber-500 hover:bg-amber-600 text-slate-900 font-semibold rounded-2xl flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-list-check"></i> VIEW ORDERS
                        </a>
                        <a href="logout.php" 
                           class="px-6 py-3 border border-slate-400 hover:border-red-400 hover:text-red-400 text-slate-300 font-medium rounded-2xl flex items-center gap-2 text-sm">
                            <i class="fa-solid fa-right-from-bracket"></i> LOGOUT
                        </a>
                    <?php else: ?>
                        <a href="login.php" 
                           class="px-6 py-3 border border-amber-500 text-amber-500 hover:bg-amber-500 hover:text-slate-900 font-semibold rounded-2xl text-sm">
                            ADMIN LOGIN
                        </a>
                    <?php endif; ?>

                    <!-- Mobile Menu Button -->
                    <button onclick="toggleMobileMenu()" 
                            class="md:hidden text-3xl text-slate-300 hover:text-white">
                        <i class="fa-solid fa-bars" id="hamburger-icon"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-slate-900 border-t border-slate-800 px-6 py-6">
            <div class="flex flex-col gap-5 text-base font-medium">
                <a href="index.php" class="py-3 border-b border-slate-700">HOME</a>
                <a href="about.php" class="py-3 border-b border-slate-700">ABOUT US</a>
                <a href="menu.php" class="py-3 border-b border-slate-700">MENU</a>
                <a href="gallery.php" class="py-3 border-b border-slate-700">GALLERY</a>
                <a href="order.php" class="py-3 border-b border-slate-700">ORDER NOW</a>
                <a href="contact.php" class="py-3 border-b border-slate-700">CONTACT US</a>
            </div>
        </div>
    </nav>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const icon = document.getElementById('hamburger-icon');
            menu.classList.toggle('hidden');
            
            if (menu.classList.contains('hidden')) {
                icon.classList = 'fa-solid fa-bars';
            } else {
                icon.classList = 'fa-solid fa-xmark';
            }
        }
    </script>