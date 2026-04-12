<?php 
// Start session safely
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'header.php'; 
?>

    <!-- Welcome / Introduction Section -->
    <section class="py-24 bg-slate-950">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <h2 class="text-5xl md:text-6xl font-bold leading-tight mb-6 section-title">
                        Welcome to<br>
                        <span class="text-amber-500">Vista Hotel</span>
                    </h2>
                    <p class="text-slate-400 text-lg leading-relaxed mb-10">
                        Nestled in the beautiful hills of Kigali, Vista Hotel offers world-class hospitality 
                        with breathtaking city views. Our modern facilities, award-winning dining, and warm 
                        Rwandan hospitality make every stay truly unforgettable.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="about.php" 
                           class="px-8 py-4 border border-slate-300 hover:bg-slate-800 rounded-3xl font-medium">
                            Learn Our Story
                        </a>
                        <a href="order.php" 
                           class="px-8 py-4 bg-amber-500 hover:bg-amber-600 text-slate-900 rounded-3xl font-semibold flex items-center gap-2">
                            Book Food Service Now 
                            <i class="fa-solid fa-utensils"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Image - Updated with your real hotel photo -->
                <div class="rounded-3xl overflow-hidden shadow-2xl border border-slate-700">
                    <img src="images/vista-hotel.jpg" 
                         alt="Vista Hotel Kigali - Swimming Pool View" 
                         class="w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold section-title">Why Guests Love Vista Hotel</h2>
                <p class="text-slate-400 mt-4 max-w-md mx-auto">
                    Experience luxury, comfort, and exceptional service in the heart of Rwanda.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-slate-800/60 p-8 rounded-3xl card-hover text-center">
                    <div class="w-16 h-16 mx-auto mb-6 bg-amber-500/10 rounded-2xl flex items-center justify-center">
                        <i class="fa-solid fa-utensils text-5xl text-amber-400"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3">Signature Dining</h3>
                    <p class="text-slate-400">
                        Enjoy fresh local ingredients and international cuisine at our restaurants.
                    </p>
                </div>

                <div class="bg-slate-800/60 p-8 rounded-3xl card-hover text-center">
                    <div class="w-16 h-16 mx-auto mb-6 bg-amber-500/10 rounded-2xl flex items-center justify-center">
                        <i class="fa-solid fa-bed text-5xl text-amber-400"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3">Luxury Accommodation</h3>
                    <p class="text-slate-400">
                        Elegantly designed rooms and suites with stunning views of Kigali.
                    </p>
                </div>

                <div class="bg-slate-800/60 p-8 rounded-3xl card-hover text-center">
                    <div class="w-16 h-16 mx-auto mb-6 bg-amber-500/10 rounded-2xl flex items-center justify-center">
                        <i class="fa-solid fa-spa text-5xl text-amber-400"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-3">Premium Services</h3>
                    <p class="text-slate-400">
                        24/7 room service, spa, pool, and personalized guest experiences.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-amber-500 to-amber-600 text-slate-900">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-4xl font-bold mb-6">Ready to Experience Luxury?</h2>
            <p class="text-xl mb-10 opacity-90">
                Order delicious meals directly to your room with just a few clicks.
            </p>
            <a href="order.php" 
               class="inline-block px-12 py-6 bg-white hover:bg-slate-100 text-slate-900 font-bold text-xl rounded-3xl shadow-lg">
                ORDER  FOOD SERVICE NOW
            </a>
        </div>
    </section>

<?php 
include 'footer.php'; 
?>