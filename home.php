<?php 
session_start();
if (!isset($_SESSION['username'])) {
    // Redirect to index.php if session is not active
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage Data Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #dddddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
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
        .navbar a.right {
            float: right;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="home.php">Home</a>
    <a href="marriage.php">Marriage Registration</a>
    <a href="logout.php" class="right">Logout</a>
</div>

<div>
    <h2>Marriage Data Table</h2>

    <?php
    // Database connection parameters
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "e-governance";

    $conn = mysqli_connect($server, $username, $password, $dbname);
    if(!$conn){
        echo "not connected";
    }

    // Fetch data from marriagedata table
    $sql = "SELECT * FROM marriagedata ORDER BY ContactNo ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table>";
        echo "<tr><th>Bride Name</th><th>Groom Name</th><th>Bride Age</th><th>Groom Age</th><th>Marriage Date</th><th>Address</th><th>Contact No</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["BrideName"]."</td>";
            echo "<td>".$row["GroomName"]."</td>";
            echo "<td>".$row["BridgeAge"]."</td>";
            echo "<td>".$row["GroomAge"]."</td>";
            echo "<td>".$row["MarriageDate"]."</td>";
            echo "<td>".$row["Address"]."</td>";
            echo "<td>".$row["ContactNo"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No data found";
    }

    // Close connection
    $conn->close();
    ?>

</div>

</body>
</html>