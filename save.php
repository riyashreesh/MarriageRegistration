<?php
 session_start();
if (isset($_POST['submit'])) {
    // Retrieve form data
    $brideName = $_POST['brideName'];
    $groomName = $_POST['groomName'];
    $brideAge = $_POST['brideAge'];
    $groomAge = $_POST['groomAge'];
    $weddingDate = $_POST['weddingDate'];
    $address = $_POST['address'];
    $contactNumber = $_POST['contactNumber'];
    $server = "localhost";
$username = "root";
$password = "";
$dbname = "e-governance";
$conn = mysqli_connect($server, $username, $password, $dbname);
if(!$conn){
    echo "not connected";
}
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Prepare SQL statement
    $sql = "INSERT INTO marriagedata 
            VALUES ('$brideName', '$groomName', $brideAge, $groomAge, '$weddingDate', '$address', '$contactNumber')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "data submitted";
         header("Location: home.php");
    }else{
        echo "query error----!";
         header("Location: marriage.php");
    }
    // $conn->close();
   
}
?>