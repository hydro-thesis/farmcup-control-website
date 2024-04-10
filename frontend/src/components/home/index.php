<?php
    session_start();

// Replace these with your actual database credentials

require_once('../../dbconnection/config.php');

// Create a database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_serial = $_SESSION["user_serial"];

// Fetch user data using the user_id
$sql = "SELECT * FROM sensordata ORDER BY time_stamp DESC LIMIT 1;";
$result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    $moisture = $row["moisture"];
    $tds = $row["tds"];
    $pH = $row["pH"];
    $EC = $row["EC"];
    $ambient_light = $row["ambient_light"];
    $temperature = $row["temperature"];
    $humidity = $row["humidity"];
    $waterlevel = $row["waterlevel"];
  }

  $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Farm Cup Control System </title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/10.0.0/material-components-web.min.css">

        <link rel="stylesheet" href="./style.css">
    </head>

    <body>
        <h1 class="home-header">Farm Cup Dashbaord</h1>
        <div>
          <div class="card-container">
            <div class="card">
              <div class="card-content">
                <h2>Cocopeat Moisture</h2>
                <p><?php echo $moisture; ?></p>
              </div>
            </div>
            <!-- Repeat this block for each card -->
            <!-- Example for Card 2 -->
            <div class="card">
              <div class="card-content">
                <h2>Total Dissolved Solids (TDS)</h2>
                <p><?php echo $tds; ?></p>
              </div>
            </div>

            <div class="card">
                <div class="card-content">
                  <h2>pH Level of Water</h2>
                  <p><?php echo $pH; ?></p>
                </div>
              </div>

              <div class="card">
                <div class="card-content">
                  <h2>Electrical Conductivity</h2>
                  <p><?php echo $EC; ?></p>
                </div>
              </div>

              <div class="card">
                <div class="card-content">
                  <h2>Ambient Light</h2>
                  <p><?php echo $ambient_light; ?></p>
                </div>
              </div>

              <div class="card">
                <div class="card-content">
                  <h2>Ambient Temperature</h2>
                  <p><?php echo $temperature; ?></p>
                </div>
              </div>

              <div class="card">
                <div class="card-content">
                  <h2>Ambient Humidity</h2>
                  <p><?php echo $humidity; ?></p>
                </div>
              </div>

              <div class="card">
                <div class="card-content">
                  <h2>Water Level</h2>
                  <p><?php echo $waterlevel; ?></p>
                </div>
              </div>
            <!-- End of repeated block -->
          </div>
        </div>
    </body>
</html>