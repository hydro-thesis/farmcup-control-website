<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Farm Cup Login </title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/10.0.0/material-components-web.min.css">

        <link rel="stylesheet" href="./style.css">

    </head>
    <body>
        <div class="login-container">
            <h1 class="login-header"> Login </h1>
            <div class="login-form">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="text-align: center;">
                <div class="md-text-field">
                    <label for="username" >Username</label>
                    <input required="" type="text" id="username" name = "userName" placeholder="Username">
                </div>
                <div class="md-text-field">
                    <label for="password">Password</label>
                    <input required="" type="password" id="password"  name="passWord" placeholder="Password">
                </div>
                <button type="submit" class="md-button">Login</button>
                </form>
            </div>

    <?php
    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Replace these with your actual database credentials
      require_once('./dbconnection/config.php');
  
      // Create a database connection
      $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
  
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
  
      // Get user input
      $user = $_POST["userName"];
      $pass = $_POST["passWord"];
  
      // Perform user authentication (replace with your actual SQL query)
      $sql = "SELECT * FROM userdata WHERE username = '$user' AND password = '$pass'";
      $result = $conn->query($sql);
  
      if ($result->num_rows === 1) {
          // User authentication successful
          $user = $result->fetch_assoc();
  
          header('Location: frontend/home/index.php');
          
      } else {
          // Invalid login credentials
          $_SESSION["error_message"] = "Invalid username or password.";
      }
  
      $conn->close();
  }
  
    ?>
        </div>
        <script src="script.js"></script>
    </body>
</html>