<?php 
session_start();
include 'db.php';

$success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $menu_item = $conn->real_escape_string($_POST['menu_item']);
    $address = $conn->real_escape_string($_POST['address']);
    $order_date = $conn->real_escape_string($_POST['order_date']);
    
    $sql = "INSERT INTO orders (full_name, email, phone, menu_item, address, order_date) 
            VALUES ('$full_name', '$email', '$phone', '$menu_item', '$address', '$order_date')";
    
    if ($conn->query($sql) === TRUE) {
        $success = true;
    }
}
?>
<?php include 'header.php'; ?>

<div class="max-w-2xl mx-auto px-6 py-20">
    <h1 class="text-5xl font-bold text-center section-title mb-12">Order Food Online</h1>
    
    <?php if ($success): ?>
        <div class="bg-green-500/10 border border-green-500 text-green-400 p-6 rounded-3xl text-center mb-8">
            ✅ Order placed successfully! Our team will deliver shortly.
        </div>
    <?php endif; ?>
    
    <form method="POST" class="space-y-8 bg-slate-900 p-10 rounded-3xl">
        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium mb-2">Full Name</label>
                <input type="text" name="full_name" required class="w-full bg-slate-800 border border-slate-700 rounded-2xl px-6 py-4 focus:border-amber-400 outline-none">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Email</label>
                <input type="email" name="email" required class="w-full bg-slate-800 border border-slate-700 rounded-2xl px-6 py-4 focus:border-amber-400 outline-none">
            </div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium mb-2">Phone</label>
                <input type="tel" name="phone" required class="w-full bg-slate-800 border border-slate-700 rounded-2xl px-6 py-4 focus:border-amber-400 outline-none">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Select Menu Item</label>
               <select name="menu_item" required 
        class="w-full bg-slate-800 border border-slate-700 rounded-2xl px-6 py-4 focus:border-amber-400 outline-none">
    <option value="">Choose item...</option>
    
    <!-- Fish -->
    <option value="Grilled Tilapia - 22,000 RWF">Grilled Tilapia - 22,000 RWF</option>
    
    <!-- Main Dishes -->
    <option value="Brochettes - 16,000 RWF">Brochettes - 16,000 RWF</option>
    <option value="Chicken Stew - 15,000 RWF">Chicken Stew - 15,000 RWF</option>
    <option value="Matoke Stew - 13,000 RWF">Matoke Stew - 13,000 RWF</option>
    
    <!-- Rice & Bread -->
    <option value="Pilau Rice - 14,000 RWF">Pilau Rice - 14,000 RWF</option>
    <option value="Chapati - 3,500 RWF">Chapati - 3,500 RWF</option>
    
    <!-- Staple -->
    <option value="Ugali with Vegetables - 9,000 RWF">Ugali with Vegetables - 9,000 RWF</option>
    
    <!-- Drinks -->
    <option value="Mützig Beer - 6,500 RWF">Mützig Beer - 6,500 RWF</option>
    <option value="Premium Whiskey - 15,000 RWF">Premium Whiskey - 15,000 RWF</option>
    
    <!-- Fresh Juices -->
    <option value="Mango Juice - 5,500 RWF">Mango Juice - 5,500 RWF</option>
    <option value="Pineapple & Ginger - 6,000 RWF">Pineapple & Ginger - 6,000 RWF</option>
</select>
            </div>
        </div>
        
        <div>
            <label class="block text-sm font-medium mb-2">Delivery Address</label>
            <input type="text" name="address" required class="w-full bg-slate-800 border border-slate-700 rounded-2xl px-6 py-4 focus:border-amber-400 outline-none">
        </div>
        
        <div>
            <label class="block text-sm font-medium mb-2">Preferred Delivery Date</label>
            <input type="date" name="order_date" required class="w-full bg-slate-800 border border-slate-700 rounded-2xl px-6 py-4 focus:border-amber-400 outline-none">
        </div>
        
        <button type="submit" 
                class="w-full py-6 bg-amber-500 hover:bg-amber-600 text-slate-900 font-bold text-xl rounded-3xl">
            PLACE ORDER NOW
        </button>
    </form>
</div>

<?php include 'footer.php'; ?>