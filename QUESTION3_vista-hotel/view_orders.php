<?php 
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
include 'db.php';
$result = $conn->query("SELECT * FROM orders ORDER BY created_at DESC");
?>
<?php include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-6 py-20">
    <div class="flex justify-between items-baseline mb-10">
        <h1 class="text-5xl font-bold section-title">Customer Orders</h1>
        <a href="logout.php" class="text-red-400 hover:text-red-500 flex items-center gap-2"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
    </div>
    
    <table class="w-full bg-slate-900 rounded-3xl overflow-hidden">
        <thead class="bg-slate-800">
            <tr>
                <th class="px-8 py-6 text-left">Date</th>
                <th class="px-8 py-6 text-left">Customer</th>
                <th class="px-8 py-6 text-left">Item</th>
                <th class="px-8 py-6 text-left">Address</th>
                <th class="px-8 py-6 text-right">Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr class="border-t border-slate-700">
                <td class="px-8 py-6"><?php echo date('d M Y', strtotime($row['created_at'])); ?></td>
                <td class="px-8 py-6"><?php echo htmlspecialchars($row['full_name']); ?></td>
                <td class="px-8 py-6"><?php echo htmlspecialchars($row['menu_item']); ?></td>
                <td class="px-8 py-6"><?php echo htmlspecialchars($row['address']); ?></td>
                <td class="px-8 py-6 text-right"><?php echo htmlspecialchars($row['phone']); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>