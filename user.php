<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "e-governance";


$con = mysqli_connect($server, $username, $password, $dbname);
if(!$con){
    echo "not connected";
}
if(isset($_POST['submit'])){
    $username = $_POST['username'];
$password = $_POST['password'];

// header("Location: marriage.html");
// Query to check if username and password match
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['username'] = $username;
    //    
        header("Location: marriage.php");
        exit();
    } else {
    //    
       header("Location: index.php");
    }

}
 ?>
