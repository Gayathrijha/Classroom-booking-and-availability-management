<?php
$servername="localhost";
$username="root";
$password="";
$dbname="allot";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO schedule (on_date, classroom_no, event_type, event_title, start_time, end_time) VALUES
('2022-06-29', '301', 'exam', 'Computer Networks', '2:00 PM', '5:00 PM'),
('2022-06-30', '302', 'exam', 'Open Elective', '10:00 AM', '12:00 PM'),
('2022-07-01', '205', 'exam', 'Web Tech', '9:00 AM', '11:00 AM'),
('2022-07-02', '207', 'exam', 'Java', '11:00 AM', '1:00 PM'),
('2022-07-04', '306', 'exam', 'Software Engineering', '2:30 PM', '5:30 PM'), 
('2022-07-05', '203', 'exam', 'AVP', '10:30 AM', '12:30 PM'),
('2022-07-06', '304', 'exam', 'Life Skills', '9:00 AM', '5:00 PM')";

if(mysqli_multi_query($conn, $sql)){
    echo "New records created successfully";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
mysqli_close($conn);
?>