<?php 
// Start session safely
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'header.php'; 
?>

<div class="max-w-7xl mx-auto px-6 py-20">
    <h1 class="text-5xl font-bold text-center section-title mb-12">Our Menu</h1>
    <p class="text-center text-slate-400 mb-12 text-lg">Delicious Rwandan and International Favorites</p>
   
    <table class="w-full border-collapse bg-white/5 backdrop-blur-md rounded-3xl overflow-hidden menu-table">
        <thead>
            <tr class="bg-slate-800 text-amber-400">
                <th class="px-8 py-6 text-left">Category</th>
                <th class="px-8 py-6 text-left">Item</th>
                <th class="px-8 py-6 text-left">Description</th>
                <th class="px-8 py-6 text-right">Price (RWF)</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-700">

            <!-- Fish Category -->
            <tr class="table-row">
                <td class="px-8 py-6 font-medium">FISH</td>
                <td class="px-8 py-6">Grilled Tilapia</td>
                <td class="px-8 py-6">Fresh Lake Kivu tilapia marinated with herbs and spices</td>
                <td class="px-8 py-6 text-right font-semibold">18,000</td>
            </tr>

            <!-- Main Dishes -->
            <tr class="table-row">
                <td class="px-8 py-6 font-medium">MAIN DISH</td>
                <td class="px-8 py-6">Brochettes</td>
                <td class="px-8 py-6">Grilled beef or goat skewers with onions and peppers</td>
                <td class="px-8 py-6 text-right font-semibold">15,000</td>
            </tr>

            <tr class="table-row">
                <td class="px-8 py-6 font-medium">MAIN DISH</td>
                <td class="px-8 py-6">Chicken Stew</td>
                <td class="px-8 py-6">Tender chicken cooked in rich tomato and onion sauce</td>
                <td class="px-8 py-6 text-right font-semibold">14,000</td>
            </tr>

            <tr class="table-row">
                <td class="px-8 py-6 font-medium">MAIN DISH</td>
                <td class="px-8 py-6">Matoke Stew</td>
                <td class="px-8 py-6">Traditional banana stew with groundnut sauce</td>
                <td class="px-8 py-6 text-right font-semibold">12,000</td>
            </tr>

            <tr class="table-row">
                <td class="px-8 py-6 font-medium">RICE &amp; BREAD</td>
                <td class="px-8 py-6">Pilau Rice</td>
                <td class="px-8 py-6">Fragrant spiced rice with meat and vegetables</td>
                <td class="px-8 py-6 text-right font-semibold">13,000</td>
            </tr>

            <tr class="table-row">
                <td class="px-8 py-6 font-medium">RICE &amp; BREAD</td>
                <td class="px-8 py-6">Chapati</td>
                <td class="px-8 py-6">Soft layered flatbread served hot</td>
                <td class="px-8 py-6 text-right font-semibold">3,000</td>
            </tr>

            <tr class="table-row">
                <td class="px-8 py-6 font-medium">STAPLE</td>
                <td class="px-8 py-6">Ugali with Vegetables</td>
                <td class="px-8 py-6">Traditional maize meal served with fresh vegetables</td>
                <td class="px-8 py-6 text-right font-semibold">8,000</td>
            </tr>

            <!-- Drinks Category -->
            <tr class="table-row">
                <td class="px-8 py-6 font-medium">DRINKS</td>
                <td class="px-8 py-6">Mützig Beer</td>
                <td class="px-8 py-6">Premium Rwandan lager beer - refreshing and crisp</td>
                <td class="px-8 py-6 text-right font-semibold">6,000</td>
            </tr>

            <tr class="table-row">
                <td class="px-8 py-6 font-medium">DRINKS</td>
                <td class="px-8 py-6">Premium Whiskey</td>
                <td class="px-8 py-6">Smooth blended whiskey served neat or on the rocks</td>
                <td class="px-8 py-6 text-right font-semibold">12,000</td>
            </tr>

            <!-- Fresh Juices -->
            <tr class="table-row">
                <td class="px-8 py-6 font-medium">FRESH JUICE</td>
                <td class="px-8 py-6">Mango Juice</td>
                <td class="px-8 py-6">Freshly squeezed ripe mango juice</td>
                <td class="px-8 py-6 text-right font-semibold">5,000</td>
            </tr>

            <tr class="table-row">
                <td class="px-8 py-6 font-medium">FRESH JUICE</td>
                <td class="px-8 py-6">Pineapple &amp; Ginger</td>
                <td class="px-8 py-6">Refreshing pineapple juice with a kick of ginger</td>
                <td class="px-8 py-6 text-right font-semibold">5,500</td>
            </tr>

        </tbody>
    </table>
</div>

<?php 
include 'footer.php'; 
?>