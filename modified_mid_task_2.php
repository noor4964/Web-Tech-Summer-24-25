<!DOCTYPE html>
<html>

<head>
    <title>Welcome to AIUB Portal</title>
    <style>
        body {
            background-color: #e6f7ff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header img {
            width: 100px;
            margin-bottom: 10px;
        }

        .header h1 {
            color: #0066cc;
            margin-bottom: 10px;
        }

        .header h2 {
            color: #cc0000;
            margin-top: 0;
        }

        .form-container {
            width: 600px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #999;
            border-radius: 10px;
            background-color: #b3e6ff;
        }

        .form-row {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="tel"],
        input[type="email"],
        input[type="password"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 80px;
            resize: vertical;
        }

        .radio-group {
            margin-top: 5px;
        }

        .button-group {
            margin-top: 20px;
            text-align: center;
        }

        input[type="button"] {
            padding: 10px 20px;
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 10px;
            font-weight: bold;
        }

        input[type="button"]:hover {
            background-color: #004c99;
        }

        input[type="button"][value="Clear"] {
            background-color: #cc0000;
        }

        input[type="button"][value="Clear"]:hover {
            background-color: #990000;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="aiub_logo.png" alt="AIUB Logo">
        <h1>Bank Management System</h1>
        <h2>Your Trusted Financial Partner</h2>
    </div>

    <div class="form-container">
        <form>
            <div class="form-row">
                <label class="form-label">Full name:</label>
                <input type="text" name="fullname" required>
            </div>

            <div class="form-row">
                <label class="form-label">Date of Birth:</label>
                <input type="date" name="dob" required>
            </div>

            <div class="form-row">
                <label class="form-label">Gender:</label>
                <div class="radio-group">
                    <input type="radio" name="gender" value="male" id="male" required>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="female" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" value="other" id="other">
                    <label for="other">Other</label>
                </div>
            </div>

            <div class="form-row">
                <label class="form-label">Marital Status:</label>
                <select name="marital_status" required>
                    <option value="">Select an option</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                </select>
            </div>

            <div class="form-row">
                <label class="form-label">Account Type:</label>
                <select name="account_type" required>
                    <option value="">Select an option</option>
                    <option value="Savings">Savings</option>
                    <option value="Current">Current</option>
                    <option value="Fixed Deposit">Fixed Deposit</option>
                </select>
            </div>

            <div class="form-row">
                <label class="form-label">Initial Deposit Amount:</label>
                <input type="text" name="deposit_amount" required>
            </div>

            <div class="form-row">
                <label class="form-label">Mobile Number:</label>
                <input type="tel" name="mobile_number" required>
            </div>

            <div class="form-row">
                <label class="form-label">Email Address:</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-row">
                <label class="form-label">Address:</label>
                <textarea name="address" required></textarea>
            </div>

            <div class="form-row">
                <label class="form-label">Occupation:</label>
                <input type="text" name="occupation" required>
            </div>

            <div class="form-row">
                <label class="form-label">National ID(NID):</label>
                <input type="text" name="nid" required>
            </div>

            <div class="form-row">
                <label class="form-label">Set Password:</label>
                <input type="password" name="password" required>
            </div>

            <div class="form-row">
                <label class="form-label">Upload Photo:</label>
                <input type="file" name="photo" accept="image/*">
            </div>

            <div class="form-row">
                <input type="checkbox" name="terms" id="terms" required>
                <label for="terms">I agree to the terms and conditions</label>
            </div>

            <div class="button-group">
                <input type="button" value="Register">
                <input type="button" value="Clear">
            </div>
        </form>
    </div>
</body>

</html>