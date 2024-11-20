<?php

function logActivity($userId, $activityType, $activityDescription){



//create db connection
$host = 'localhost';
$db = 'LiquorProject';
$user = 'postgres';
$pass = 'Anaethan03';
$port = '5432';

$conn = pg_connect("host=$host port=$port dbname=$db user=$user password=$pass");

//validate connection
if(!$conn){
    die("connection failed: " . pg_last_error());
}


//capture IP addresses
$ipAddress = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];

//Add tracking info to db
$SQL = "insert into user_activity_logging(user_id, activity_type, activity_description, ip_address, ip_address, user_agent) VALUES($1, $2, $3, $4, $5, $6)";

//execute the SQL for INsert into the table
$result = pg_query_params($conn, $SQL, array($userId, $activityType, $activityDescription, $ipAddress, $userAgent));

if(!$result){
    echo "Error in query execution " . pg_last_error($conn);
}else {
    echo "Activity logged successfully";
}

//close connection to db
pg_close($conn);


}
?>