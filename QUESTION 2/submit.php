<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Start transaction
    $conn->begin_transaction();
    
    try {
        // Sanitize and collect data
        $first_name = $conn->real_escape_string($_POST['first_name'] ?? '');
        $last_name = $conn->real_escape_string($_POST['last_name'] ?? '');
        
        // Format DOB (YYYY-MM-DD)
        $day = $_POST['day'] ?? '';
        $month = $_POST['month'] ?? '';
        $year = $_POST['year'] ?? '';
        $month_map = ['Jan'=>'01', 'Feb'=>'02', 'Mar'=>'03', 'Apr'=>'04', 'May'=>'05', 'Jun'=>'06', 
                       'Jul'=>'07', 'Aug'=>'08', 'Sep'=>'09', 'Oct'=>'10', 'Nov'=>'11', 'Dec'=>'12'];
        $month_num = $month_map[$month] ?? '01';
        $dob = "$year-$month_num-$day";
        
        $email = $conn->real_escape_string($_POST['email'] ?? '');
        $mobile = $conn->real_escape_string($_POST['mobile'] ?? '');
        $gender = $conn->real_escape_string($_POST['gender'] ?? '');
        $address = $conn->real_escape_string($_POST['address'] ?? '');
        $city = $conn->real_escape_string($_POST['city'] ?? '');
        $pincode = $conn->real_escape_string($_POST['pincode'] ?? '');
        $state = $conn->real_escape_string($_POST['state'] ?? '');
        $country = $conn->real_escape_string($_POST['country'] ?? 'India');
        $course = $conn->real_escape_string($_POST['course'] ?? '');
        
        // Process hobbies
        $hobbies_array = $_POST['hobbies'] ?? [];
        if (in_array('Others', $hobbies_array) && !empty($_POST['other_hobby_text'])) {
            $key = array_search('Others', $hobbies_array);
            if ($key !== false) {
                $hobbies_array[$key] = $_POST['other_hobby_text'];
            }
        }
        $hobbies = $conn->real_escape_string(implode(", ", $hobbies_array));
        
        // Insert into registrations table
        $sql1 = "INSERT INTO registrations (first_name, last_name, dob, email, mobile, gender, address, city, pincode, state, country, hobbies, courses) 
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param("sssssssssssss", 
            $first_name, $last_name, $dob, $email, $mobile, $gender, 
            $address, $city, $pincode, $state, $country, $hobbies, $course
        );
        $stmt1->execute();
        $student_id = $conn->insert_id; // Get the auto-generated ID
        $stmt1->close();
        
        // Insert qualifications
        $sql2 = "INSERT INTO qualifications (student_id, sl_no, examination, board, percentage, year_of_passing) 
                 VALUES (?, ?, ?, ?, ?, ?)";
        $stmt2 = $conn->prepare($sql2);
        
        for ($i = 1; $i <= 4; $i++) {
            $exam = ($i == 1) ? "Class X" : (($i == 2) ? "Class XII" : (($i == 3) ? "Graduation" : "Masters"));
            $board = $_POST["qual_board$i"] ?? '';
            $percentage = !empty($_POST["qual_percent$i"]) ? floatval($_POST["qual_percent$i"]) : null;
            $year_passing = !empty($_POST["qual_year$i"]) ? intval($_POST["qual_year$i"]) : null;
            
            // Only insert if at least board or percentage or year is provided
            if (!empty($board) || !empty($percentage) || !empty($year_passing)) {
                $stmt2->bind_param("iissdi", $student_id, $i, $exam, $board, $percentage, $year_passing);
                $stmt2->execute();
            }
        }
        $stmt2->close();
        
        // Commit transaction
        $conn->commit();
        
        // Success page
        echo "<!DOCTYPE html>
        <html>
        <head>
            <title>Registration Success</title>
            <style>
                body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background: linear-gradient(145deg, #e0eaf5 0%, #cfddee 100%); }
                .success-box { background: white; padding: 40px; border-radius: 20px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.2); max-width: 500px; }
                .success-box h2 { color: #2e6b3e; margin-bottom: 20px; }
                .success-box p { margin: 15px 0; font-size: 16px; }
                .btn { display: inline-block; margin-top: 20px; padding: 10px 30px; background: #1e4663; color: white; text-decoration: none; border-radius: 40px; font-weight: bold; }
                .btn:hover { background: #0f3550; }
            </style>
        </head>
        <body>
            <div class='success-box'>
                <h2>✅ Registration Successful!</h2>
                <p><strong>Name:</strong> $first_name $last_name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Course:</strong> $course</p>
                <p>Your data has been saved to the database.</p>
                <a href='index.php' class='btn'>Register Another Student</a>
            </div>
        </body>
        </html>";
        
    } catch (Exception $e) {
        // Rollback transaction on error
        $conn->rollback();
        echo "<!DOCTYPE html>
        <html>
        <head>
            <title>Registration Error</title>
            <style>
                body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background: linear-gradient(145deg, #e0eaf5 0%, #cfddee 100%); }
                .error-box { background: white; padding: 40px; border-radius: 20px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.2); max-width: 500px; }
                .error-box h2 { color: #c7254e; margin-bottom: 20px; }
                .error-box p { margin: 15px 0; }
                .btn { display: inline-block; margin-top: 20px; padding: 10px 30px; background: #1e4663; color: white; text-decoration: none; border-radius: 40px; font-weight: bold; }
            </style>
        </head>
        <body>
            <div class='error-box'>
                <h2>❌ Registration Failed</h2>
                <p>Error: " . $e->getMessage() . "</p>
                <a href='index.php' class='btn'>Try Again</a>
            </div>
        </body>
        </html>";
    }
}

$conn->close();
?>