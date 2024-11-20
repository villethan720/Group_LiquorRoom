<?php
// Start session
session_start();

// Database configuration
$host = 'localhost';
$db = 'LiquorProject';
$user = 'postgres';
$pass = 'Anaethan03';
$port = 5432;

// Create connection to MySQL
$conn = mysqli_connect($host, $user, $pass, $db, $port);

// Validate the connection works
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user account info
$username = $_GET['username'];
$password = $_GET['password'];

// SQL Query
$sql = "SELECT * FROM users WHERE username = $1";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    // Fetch user data
    $user = mysqli_fetch_assoc($result);

    // Verify password using password_verify()
    if (password_verify($password, $user['password'])) {
        // Generate session id if password is correct
        session_regenerate_id(true);

        // Store username in session
        $_SESSION['username'] = $username;

        // Redirects to new page
        header("Location: homePage.php");
        exit();
    } else {
        echo "Invalid password";
    }
} else {
    echo "No user found";
}

// Close connection
mysqli_close($conn);
?>