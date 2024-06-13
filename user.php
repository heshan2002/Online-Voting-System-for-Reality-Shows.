<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $update_name = $_POST['update_name'];
    $update_fname = $_POST['update_fname'];
    $update_email = $_POST['update_email'];
    $old_pass = $_POST['old_pass'];
    $update_pass = $_POST['update_pass'];
    $new_pass = $_POST['new_pass'];
    $confirm_pass = $_POST['confirm_pass'];
    
    // Database connection
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "project1";

    // Create a new mysqli instance
    $conn = new mysqli($servername,'root','', $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update profile query using prepared statements
    $stmt = $conn->prepare("UPDATE users SET username = ?, fullname = ?, email = ? WHERE username = ?");
    $stmt->bind_param("ssss", $update_name, $update_fname, $update_email, $update_name);
    $stmt->execute();

    // Change password query using prepared statements
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ? AND password = ?");
    $stmt->bind_param("sss", $new_pass, $update_name, $old_pass);
    $stmt->execute();

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
