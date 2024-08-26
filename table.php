<?php
$servername="localhost";
$username="root";
$password="";
$dbname="allot";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE schedule(
on_date DATE NOT NULL,
classroom_no VARCHAR(30) NOT NULL,
event_type VARCHAR(50) NOT NULL,
event_title VARCHAR(50) NOT NULL, 
start_time TIME NOT NULL,
end_time TIME NOT NULL
)" ;

if(mysqli_query($conn, $sql)){
  echo "Table created successfully";
}else{
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>