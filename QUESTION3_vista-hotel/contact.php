<?php 
include 'db.php';
$success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $location = $conn->real_escape_string($_POST['location']);
    $message = $conn->real_escape_string($_POST['message']);
    
    $sql = "INSERT INTO contacts (full_name, email, phone, location, message) 
            VALUES ('$full_name', '$email', '$phone', '$location', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        $success = true;
    }
}
?>
<?php include 'header.php'; ?>

<div class="max-w-2xl mx-auto px-6 py-20">
    <h1 class="text-5xl font-bold text-center section-title mb-12">Get In Touch</h1>
    
    <?php if ($success): ?>
        <div class="bg-green-500/10 border border-green-500 text-green-400 p-6 rounded-3xl text-center mb-8">
            ✅ Thank you! Your message has been received.
        </div>
    <?php endif; ?>
    
    <form method="POST" class="space-y-8 bg-slate-900 p-10 rounded-3xl">
        <div class="grid md:grid-cols-2 gap-6">
            <div><label class="block text-sm font-medium mb-2">Full Name</label><input type="text" name="full_name" required class="w-full bg-slate-800 border border-slate-700 rounded-2xl px-6 py-4"></div>
            <div><label class="block text-sm font-medium mb-2">Email</label><input type="email" name="email" required class="w-full bg-slate-800 border border-slate-700 rounded-2xl px-6 py-4"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
            <div><label class="block text-sm font-medium mb-2">Phone</label><input type="tel" name="phone" required class="w-full bg-slate-800 border border-slate-700 rounded-2xl px-6 py-4"></div>
            <div><label class="block text-sm font-medium mb-2">Location</label><input type="text" name="location" required class="w-full bg-slate-800 border border-slate-700 rounded-2xl px-6 py-4"></div>
        </div>
        <div>
            <label class="block text-sm font-medium mb-2">Message</label>
            <textarea name="message" rows="6" required class="w-full bg-slate-800 border border-slate-700 rounded-3xl px-6 py-4"></textarea>
        </div>
        <button type="submit" class="w-full py-6 bg-amber-500 hover:bg-amber-600 text-slate-900 font-bold text-xl rounded-3xl">SEND MESSAGE</button>
    </form>
</div>

<?php include 'footer.php'; ?>