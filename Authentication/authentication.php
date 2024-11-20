<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    die("INVALID REQUEST METHOD");
}

//start session
session_start();

include './function/track_activity.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

//Database configuration
$host = 'localhost';
$db = 'LiquorProject';
$user = 'postgres';
$pass = 'Anaethan03';
$port = '5432';

//Create connection to PostGres
//$conn = pg_connect("host=$host port=$port dbname=$db user=$user password=$pass");

$dsn = "pgsql:host=$host;dbname=$db";


try {
    //grabs all credentials needed to get into postgres to start session
   $pdo = new PDO($dsn, $user, $pass);



    //set an error alert
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    //Echo messages
    //echo "Successfully connected to the database";

    //try to query database
    //$stmt = $pdo->query('SELECT * FROM vodka');
    //while ($row = $stmt->fetch()) {
      //  echo $row['vodka_name'] . "\n";
    //}

    $stmt = $pdo->query('SELECT * FROM users WHERE id = 1');
    while ($row = $stmt->fetch()) {
        echo $row['username'] . "\n";
    }
    
    header("Location: homePage.php");

} catch (PDOException $e) {
    //catches error and gets the error message to show the user
    echo "Connection Failed: " . $e->getMessage();
}

//Validate the connection works
/*if (!$conn){
    die("Connection failed " . pg_last_error());
} else{
    echo "Connection success.";
}*/

//Get user account info
/*$username = $_POST['username'];
$password = $_POST['password'];

//SQL Query
$sql = "SELECT * FROM users WHERE username = $1 AND password = $pass";
$result = pg_query_params($conn, $sql, array($username));

if(pg_num_rows($result) > 0){
    //fetch user data
    $user = pg_fetch_assoc($result);

    //verify password using password_verify()
    if (hash_equals($user['password'], crypt($password, $user['password']))) {

        //store username in session
        $_SESSION['username'] = $username; 
        logActivity($username, 'login', 'logged in success');
        header("Location: homePage.php");
    }else{
        logActivity($username, 'login', 'Login failed');
        echo "Invalid password";
    }
} else{
    echo "no user found";
}*/

//close connection
//pg_close($conn);
?>