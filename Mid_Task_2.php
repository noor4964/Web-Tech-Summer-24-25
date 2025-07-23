<!DOCTYPE html>
<html>

<head>
    <title>Welcome to AIUB Portal</title>
</head>

<body>
    <center>
        <img src="aiub_logo.png" width="100">
        <h1 style="color: blue;">Bank Management System</h1>
        <h2 style="color: red;">Your Trusted Financial Partner</h2>
    </center>

    <form>
        <table align="middle">
            <tr>
                <td>
                    Full name: <input type="text">
                </td>
            </tr>
            <tr>
                <td>
                    Date of Birth: <input type="date">
                </td>
            </tr>
            <tr>
                <td>
                    Gender: <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other"> Other
                </td>
            </tr>
            <tr>
                <td> Marital Status:
                    <select name="single">
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                </td>
            </tr>
            <tr>
                <td>
                    Account Type:
                    <select name="account type">
                        <option value="Savings">Savings</option>
                        <option value="Current">Current</option>
                        <option value="Fixed Deposit">Fixed Deposit</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Initial Deposit Amount: <input type="text">
                </td>
            </tr>
            <tr>
                <td>
                    Mobile Number: <input type="tel">
                </td>
            </tr>
            <tr>
                <td>
                    Email Address: <input type="email">
                </td>
            </tr>
            <tr>
                <td>
                    Address: <textarea width="100" height="100">
                    </textarea>
                </td>

            </tr>
            <tr>
                <td>
                    Occupation: <input type="text">

                </td>
            </tr>
            <tr>
                <td>
                    National ID(NID): <input type="text">
                </td>
            </tr>
            <tr>
                <td>
                    Set Password: <input type="password">
                </td>
            </tr>
            <tr>
                <td>
                    Upload Photo: <input type="file">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox"> I agree to the terms and conditions
                </td>
            </tr>
            <tr>
                <td>
                    <input type="button" value="Register">
                    <input type="button" value="Clear">
                </td>
            </tr>

        </table>
    </form>




    <style>
        body {
            background-color: skyblue;

        }

        table {

            margin: 100px auto;
            padding: 100px;
            border: 1px solid black;
            border-radius: 10px;
            background-color: cyan;

        }

        td {
            padding: 5px;
            font-family: Arial, sans-serif;
            font-size: 14px;

        }

        input[type="text"],
        input[type="date"],
        input[type="tel"],
        input[type="email"],
        input[type="password"],
        select,
        textarea {
            width: 100%;
            padding: 5px;
            margin-top: 5px;


        }

        input[type="button"] {
            padding: 5;
            background-color: black;
            color: red;
            cursor: pointer;
        }
    </style>

</body>

</html>