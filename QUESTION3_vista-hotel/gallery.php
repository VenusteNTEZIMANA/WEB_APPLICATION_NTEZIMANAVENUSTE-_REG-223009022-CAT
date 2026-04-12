<?php 
// Start session safely
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'header.php'; 
?>

<div class="max-w-7xl mx-auto px-6 py-20">
    <h1 class="text-5xl font-bold text-center section-title mb-12">Our Gallery</h1>
    <p class="text-center text-slate-400 mb-12 text-lg">
        Click on any dish or drink to order instantly
    </p>
   
    <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
        
        <!-- Brochettes -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <div class="relative">
                <img src="images/brochettes.jpg" 
                     alt="Brochettes" 
                     class="w-full h-64 object-cover group-hover:scale-105">
                <div class="absolute top-4 right-4 bg-black/70 text-white text-xs px-3 py-1 rounded-full">
                    Popular
                </div>
            </div>
            <div class="p-5 bg-slate-900 text-center font-medium text-lg">
                Brochettes
            </div>
        </a>

        <!-- Ugali -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/ugali.jpg" 
                 alt="Ugali" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium text-lg">
                Ugali with Vegetables
            </div>
        </a>

        <!-- Grilled Tilapia -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/grilled tilapia.jpg" 
                 alt="Grilled Tilapia" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium text-lg">
                Grilled Tilapia
            </div>
        </a>

        <!-- Pilau -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/pilau.jpg" 
                 alt="Pilau" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium text-lg">
                Pilau Rice
            </div>
        </a>

        <!-- Chapati -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/chapati.jpg" 
                 alt="Chapati" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium text-lg">
                Chapati
            </div>
        </a>

        <!-- Matoke -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/matoke.jpg" 
                 alt="Matoke" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium text-lg">
                Matoke Stew
            </div>
        </a>

        <!-- Chicken Stew -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/chicken stew.jpg" 
                 alt="Chicken Stew" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium text-lg">
                Chicken Stew
            </div>
        </a>
<!-- Mützig Beer - NEW -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/Mutzigbeer.jpg" 
                 alt="Mützig Beer" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium text-lg">Mützig Beer</div>
        </a>

        <!-- Whiskey - NEW -->
        <a href="order.php" class="card-hover block rounded-3xl overflow-hidden border border-slate-700 group">
            <img src="images/whiskey.jpg" 
                 alt="Whiskey" 
                 class="w-full h-64 object-cover group-hover:scale-105">
            <div class="p-5 bg-slate-900 text-center font-medium text-lg">Premium Whiskey</div>
        </a>

    </div>
</div>

<?php 
include 'footer.php'; 
?>

