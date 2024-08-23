<?php
 session_start();
if (isset($_SESSION['username'])) {
    // Redirect to marriage.html if session is active
    header("Location: marriage.php");
    exit();
}?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Webpage Design</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: #f4f4f9;
      }

      .main {
        width: 100%;
        height: 100vh;
        background: url("1.jpg") no-repeat center center/cover;
        display: flex;
        flex-direction: column;
        color: white;
        overflow: hidden;
      }

      .navbar {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
      }

      .navbar .icon .logo {
        font-size: 25px;
        font-weight: bold;
      }

      .navbar .menu ul {
        list-style: none;
        display: flex;
        gap: 20px;
      }

      .navbar .menu ul li {
        display: inline-block;
      }

      .navbar .menu ul li a {
        color: white;
        text-decoration: none;
        font-size: 18px;
      }

      .navbar .search {
        display: flex;
        align-items: center;
      }

      .navbar .search .srch {
        padding: 5px;
        border: none;
        border-radius: 5px;
        outline: none;
      }

      .navbar .search .btn {
        padding: 5px 10px;
        background-color: #2575fc;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 10px;
      }

      .content-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100%;
        width: 100%;
        padding: 0 50px;
      }

      .content {
        text-align: left;
        width: 50%;
      }

      .content h1 {
        font-size: 50px;
        margin-bottom: 20px;
        color: #ffde59;
      }

      .content span {
        color: #ff6347;
      }

      .content .par {
        font-size: 20px;
        margin-bottom: 20px;
        color: #ffffff;
      }

      .content .cn {
        padding: 10px 30px;
        background-color: #2575fc;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        font-size: 18px;
      }

      .content .cn a {
        color: white;
        text-decoration: none;
      }

      .form {
        width: 30%;
        background: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        color: #333;
        margin-right: 100px;
      }

      .form h2 {
        margin-bottom: 20px;
        color: #ff6347;
      }

      .form input {
        display: block;
        width: 90%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        outline: none;
      }

      .form .btnn {
        background-color: #2575fc;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        width: 95%;
        text-align: center;
      }

      .form .btnn a {
        color: white;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="main">
      <div class="content-wrapper">
        <div class="content">
          <h1><span>Marriage </span> <br />Registration</h1>
          <p class="par">
            Register your Marriage for proper management of married individuals.
            <br />
            We provide Legal and Counselling Support for marriage.
          </p>
          <!-- <button class="cn"><a href="#">Register Now</a></button> -->
        </div>

        <div class="form">
          <h2>Login Here</h2>
          <form action="user.php" method="post">
            <input
              type="text"
              name="username"
              placeholder="Enter your username"
            />
            <input
              type="password"
              name="password"
              placeholder="Enter password"
            />
            <button class="btnn" type="submit" name="submit">
              <a href="#">Login</a>
            </button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  </body>
</html>
