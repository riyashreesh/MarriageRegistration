<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Redirect to index.php if session is not active
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marriage Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 700px;
            margin: 20px auto;
        }

        h2 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            margin-bottom: 5px;
            color: #555555;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group.flex-group {
            display: flex;
            justify-content: space-between;
        }

        .form-group.flex-group .half-width {
            width: calc(50% - 5px);
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="home.php">Home</a>
    <a href="marriage.php">Marriage Registration</a>
    <a href="logout.php" style="float: right;">Logout</a>
</div>

<div class="container">
    <h2>Marriage Registration Form</h2>
    <form action="save.php" method="post">
        <div class="form-group flex-group">
            <div class="half-width">
                <label for="brideName">Bride's Name:</label>
                <input type="text" id="brideName" name="brideName" required />
            </div>
            <div class="half-width">
                <label for="groomName">Groom's Name:</label>
                <input type="text" id="groomName" name="groomName" required />
            </div>
        </div>

        <div class="form-group flex-group">
            <div class="half-width">
                <label for="brideAge">Bride's Age:</label>
                <input type="number" id="brideAge" name="brideAge" required />
            </div>
            <div class="half-width">
                <label for="groomAge">Groom's Age:</label>
                <input type="number" id="groomAge" name="groomAge" required />
            </div>
        </div>

        <div class="form-group">
            <label for="weddingDate">Wedding Date:</label>
            <input type="date" id="weddingDate" name="weddingDate" required />
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>
        </div>

        <div class="form-group">
            <label for="contactNumber">Contact Number:</label>
            <input type="tel" id="contactNumber" name="contactNumber" required />
        </div>

        <input type="submit" name="submit" value="Register" />
    </form>
</div>

</body>
</html>