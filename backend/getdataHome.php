<?php
include('dbconnection.php');

$sql = "SELECT * FROM userdata WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    $_SESSION["user_role"] = $user["role"];
    $role = $_SESSION["user_role"];
    $user_id = $user["username"];
} else {
    // Invalid login credentials
    $_SESSION["error_message"] = "No User Logged In";
}

$conn->close();
?>