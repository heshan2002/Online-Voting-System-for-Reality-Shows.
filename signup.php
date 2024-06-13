<?php
require_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $reenterpassword = $_POST["re-enterpassword"];

    if ($password !== $reenterpassword) {
        echo "<script>alert('Passwords do not match. Please re-enter the password.'); </script>";
        exit;
    }

    // Check if the username already exists
    $checkUsernameQuery = "SELECT * FROM users WHERE username = '$username'";
    $checkUsernameResult = mysqli_query($conn, $checkUsernameQuery);

    if (mysqli_num_rows($checkUsernameResult) > 0) {
        echo "<script>alert('Username already exists. Please choose a different username.'); window.location.href = 'signup.php';</script>";
        exit;
    } else {
        // Insert the user data into the database
        $insertQuery = "INSERT INTO users (username, fullname, email, password) VALUES ('$username', '$fullname', '$email', '$password')";

        if (mysqli_query($conn, $insertQuery)) {
            mysqli_close($conn);
            echo "<script>alert('Signup successful!'); window.location.href = 'log.html';</script>";
            exit;
        } else {
            echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
