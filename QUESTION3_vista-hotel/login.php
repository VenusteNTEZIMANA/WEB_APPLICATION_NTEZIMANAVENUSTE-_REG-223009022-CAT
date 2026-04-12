<?php 
session_start();
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Simple admin login (change password for real project)
    if ($username === 'admin' && $password === 'vista2026') {
        $_SESSION['logged_in'] = true;
        header("Location: view_orders.php");
        exit;
    } else {
        $error = "Invalid credentials";
    }
}
?>
<?php include 'header.php'; ?>

<div class="max-w-md mx-auto px-6 py-20">
    <h1 class="text-5xl font-bold text-center section-title mb-12">Admin Login</h1>
    <?php if ($error): ?><div class="bg-red-500/10 text-red-400 p-4 rounded-2xl mb-8 text-center"><?php echo $error; ?></div><?php endif; ?>
    
    <form method="POST" class="bg-slate-900 p-10 rounded-3xl space-y-8">
        <div>
            <label class="block text-sm font-medium mb-2">Username</label>
            <input type="text" name="username" value="admin" class="w-full bg-slate-800 border border-slate-700 rounded-2xl px-6 py-4">
        </div>
        <div>
            <label class="block text-sm font-medium mb-2">Password</label>
            <input type="password" name="password" value="vista2026" class="w-full bg-slate-800 border border-slate-700 rounded-2xl px-6 py-4">
        </div>
        <button type="submit" class="w-full py-6 bg-amber-500 text-slate-900 font-bold text-xl rounded-3xl">LOGIN</button>
    </form>
  
</div>

<?php include 'footer.php'; ?>