<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(145deg, #e0eaf5 0%, #cfddee 100%);
            font-family: 'Segoe UI', 'Calibri', 'Roboto', sans-serif;
            padding: 40px 20px;
        }

        .form-wrapper {
            max-width: 1100px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 28px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2), 0 6px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .form-container {
            padding: 30px 40px 40px 40px;
        }

        .main-title {
            text-align: center;
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: underline;
            text-decoration-thickness: 3px;
            text-underline-offset: 10px;
            color: #1e2a3e;
            margin-bottom: 35px;
        }

        .form-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px 30px;
            margin-bottom: 25px;
        }

        .field-group {
            flex: 1 1 calc(50% - 30px);
            min-width: 200px;
        }

        .field-label {
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            color: #1f3b4c;
            margin-bottom: 6px;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1.5px solid #cbd5e1;
            border-radius: 12px;
            font-size: 14px;
            font-family: inherit;
            background-color: #fefefe;
            transition: 0.2s;
            outline: none;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #2c7da0;
            box-shadow: 0 0 0 3px rgba(44,125,160,0.2);
        }

        .radio-group, .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 18px;
            align-items: center;
            margin-top: 5px;
        }

        .radio-group label, .checkbox-group label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
        }

        input[type="radio"], input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #2c7da0;
            margin: 0;
        }

        .dob-row {
            display: flex;
            gap: 12px;
            align-items: center;
        }
        
        .dob-row select {
            width: auto;
            flex: 1;
        }

        .qualification-section {
            margin: 30px 0 25px 0;
        }
        
        .section-subtitle {
            font-weight: 800;
            font-size: 18px;
            text-transform: uppercase;
            background: #eef2f7;
            padding: 8px 12px;
            border-radius: 14px;
            margin-bottom: 18px;
            color: #1e2f3a;
        }
        
        .qual-table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        }
        
        .qual-table th, .qual-table td {
            border: 1px solid #d4dce6;
            padding: 12px 10px;
            text-align: left;
            vertical-align: middle;
            font-size: 14px;
        }
        
        .qual-table th {
            background-color: #e9edf2;
            font-weight: 700;
            color: #1e2a3e;
        }
        
        .qual-table td input {
            border: 1px solid #cfdee9;
            border-radius: 10px;
            padding: 8px 8px;
            width: 100%;
        }
        
        .small-note {
            font-size: 11px;
            color: #4b6b7c;
            margin-top: 6px;
            text-align: right;
        }

        .hobby-group {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            align-items: center;
            margin: 5px 0 0;
        }
        
        .other-input {
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .other-input input[type="text"] {
            width: 140px;
            padding: 6px 8px;
        }

        .courses-radio {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            margin-top: 5px;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 35px;
            margin-bottom: 10px;
        }
        
        .btn {
            background: #1e4663;
            border: none;
            padding: 12px 38px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 40px;
            color: white;
            cursor: pointer;
            transition: 0.2s;
        }
        
        .btn-reset {
            background: #5f6c7a;
        }
        
        .btn:hover {
            background: #0f3550;
            transform: scale(1.02);
        }
        
        .btn-reset:hover {
            background: #3e4a57;
        }
        
        .country-fixed {
            background: #f1f5f9;
            font-weight: 500;
        }
        
        @media (max-width: 780px) {
            .form-container { padding: 20px; }
            .field-group { flex: 1 1 100%; }
            .dob-row { flex-wrap: wrap; }
        }
    </style>
</head>
<body>

<div class="form-wrapper">
    <div class="form-container">
        <div class="main-title">STUDENT REGISTRATION FORM</div>

        <form action="submit.php" method="POST" id="studentRegForm">
            <!-- PERSONAL DETAILS SECTION -->
            <div class="form-grid">
                <div class="field-group">
                    <div class="field-label">FIRST NAME</div>
                    <input type="text" name="first_name" placeholder="First name" required>
                </div>
                <div class="field-group">
                    <div class="field-label">LAST NAME</div>
                    <input type="text" name="last_name" placeholder="Last name" required>
                </div>
                <div class="field-group">
                    <div class="field-label">DATE OF BIRTH</div>
                    <div class="dob-row">
                        <select name="day" required>
                            <option value="">Day</option>
                            <?php for($i=1; $i<=31; $i++) echo "<option>$i</option>"; ?>
                        </select>
                        <select name="month" required>
                            <option value="">Month</option>
                            <option value="Jan">Jan</option><option value="Feb">Feb</option><option value="Mar">Mar</option>
                            <option value="Apr">Apr</option><option value="May">May</option><option value="Jun">Jun</option>
                            <option value="Jul">Jul</option><option value="Aug">Aug</option><option value="Sep">Sep</option>
                            <option value="Oct">Oct</option><option value="Nov">Nov</option><option value="Dec">Dec</option>
                        </select>
                        <select name="year" required>
                            <option value="">Year</option>
                            <?php for($i=2026; $i>=1990; $i--) echo "<option>$i</option>"; ?>
                        </select>
                    </div>
                </div>
                <div class="field-group">
                    <div class="field-label">EMAIL ID</div>
                    <input type="email" name="email" placeholder="student@example.com" required>
                </div>
                <div class="field-group">
                    <div class="field-label">MOBILE NUMBER</div>
                    <input type="tel" name="mobile" placeholder="9876543210" maxlength="10" pattern="[0-9]{10}" required>
                </div>
                <div class="field-group">
                    <div class="field-label">GENDER</div>
                    <div class="radio-group">
                        <label><input type="radio" name="gender" value="Male" required> Male</label>
                        <label><input type="radio" name="gender" value="Female"> Female</label>
                    </div>
                </div>
                <div class="field-group">
                    <div class="field-label">ADDRESS</div>
                    <textarea name="address" rows="2" placeholder="Street, house no, area..."></textarea>
                </div>
                <div class="field-group">
                    <div class="field-label">CITY</div>
                    <input type="text" name="city" placeholder="City">
                </div>
                <div class="field-group">
                    <div class="field-label">PIN CODE</div>
                    <input type="text" name="pincode" placeholder="6 digit code" pattern="[0-9]{6}">
                </div>
                <div class="field-group">
                    <div class="field-label">STATE</div>
                    <input type="text" name="state" placeholder="State">
                </div>
                <div class="field-group">
                    <div class="field-label">COUNTRY</div>
                    <select name="country" class="country-fixed">
                        <option value="India" selected>India</option>
                        <option value="USA">USA</option>
                        <option value="UK">UK</option>
                        <option value="Canada">Canada</option>
                    </select>
                </div>
                <div class="field-group">
                    <div class="field-label">HOBBIES</div>
                    <div class="hobby-group">
                        <label><input type="checkbox" name="hobbies[]" value="Drawing"> Drawing</label>
                        <label><input type="checkbox" name="hobbies[]" value="Singing"> Singing</label>
                        <label><input type="checkbox" name="hobbies[]" value="Dancing"> Dancing</label>
                        <label><input type="checkbox" name="hobbies[]" value="Sketching"> Sketching</label>
                        <div class="other-input">
                            <label><input type="checkbox" name="hobbies[]" value="Others" id="othersCheck"> Others</label>
                            <input type="text" name="other_hobby_text" id="otherHobbyText" placeholder="Specify hobby" disabled>
                        </div>
                    </div>
                </div>
            </div>

            <!-- QUALIFICATION TABLE -->
            <div class="qualification-section">
                <div class="section-subtitle">QUALIFICATION</div>
                <table class="qual-table">
                    <thead>
                        <tr>
                            <th>Sl.No.</th><th>Examination</th><th>Board</th><th>Percentage</th><th>Year of Passing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Class X</td><td><input type="text" name="qual_board1" maxlength="10"></td><td><input type="text" name="qual_percent1" placeholder="upto 2 decimal"></td><td><input type="text" name="qual_year1"></td></tr>
                        <tr><td>2</td><td>Class XII</td><td><input type="text" name="qual_board2" maxlength="10"></td><td><input type="text" name="qual_percent2" placeholder="upto 2 decimal"></td><td><input type="text" name="qual_year2"></td></tr>
                        <tr><td>3</td><td>Graduation</td><td><input type="text" name="qual_board3" maxlength="10"></td><td><input type="text" name="qual_percent3" placeholder="upto 2 decimal"></td><td><input type="text" name="qual_year3"></td></tr>
                        <tr><td>4</td><td>Masters</td><td><input type="text" name="qual_board4" maxlength="10"></td><td><input type="text" name="qual_percent4" placeholder="upto 2 decimal"></td><td><input type="text" name="qual_year4"></td></tr>
                    </tbody>
                </table>
                <div class="small-note">(10 char max) (upto 2 decimal)</div>
            </div>

            <!-- COURSES APPLIED FOR -->
            <div>
                <div class="section-subtitle" style="margin-bottom: 12px;">COURSES APPLIED FOR</div>
                <div class="courses-radio">
                    <label><input type="radio" name="course" value="BCA" required> BCA</label>
                    <label><input type="radio" name="course" value="B.Com"> B.Com</label>
                    <label><input type="radio" name="course" value="B.Sc"> B.Sc</label>
                    <label><input type="radio" name="course" value="B.A"> B.A</label>
                </div>
            </div>

            <!-- BUTTONS -->
            <div class="action-buttons">
                <button type="submit" class="btn">Submit</button>
                <button type="reset" class="btn btn-reset">Reset</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Enable/disable "other hobby" text field
    const othersCheck = document.getElementById('othersCheck');
    const otherText = document.getElementById('otherHobbyText');
    if(othersCheck) {
        othersCheck.addEventListener('change', function(e) {
            otherText.disabled = !this.checked;
            if(!this.checked) otherText.value = '';
        });
    }
</script>

</body>
</html>