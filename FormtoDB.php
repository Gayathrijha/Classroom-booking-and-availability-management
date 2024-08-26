<!DOCTYPE html>
<html>
<body>
<centre>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "allot";
  
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
        
          $on_date =  $_REQUEST['on_date'];
          $classroom_no = $_REQUEST['classroom_no'];
          $event_type = $_REQUEST['event_type'];
          $event_title = $_REQUEST['event_title'];
          $start_time = $_REQUEST['start_time'];
          $end_time = $_REQUEST['end_time'];

          $starttime=date("h:i:s", strtotime($start_time));
$endtime=date("h:i:s", strtotime($end_time));

          $on_dateErr = $classroom_noErr = $event_typeErr = $event_titleErr = $start_timeErr = $end_timeErr = "";
          
          $sqli="SELECT * from schedule WHERE on_date='$on_date'   OR  (start_time>='$starttime' AND end_time<='$endtime')";
          //if ($result=$conn->query($sqli) === TRUE) 
          //{
         $result = $conn->query($sqli);
          if ($result->num_rows > 0) 
          {
            echo "<script> alert('Already Reserved:');window.location='Allotmentform.php' </script>";
          }
        
      else{    
           
$sql = "INSERT INTO schedule(on_date, classroom_no, event_type, event_title, start_time, end_time)
VALUES ('$on_date','$classroom_no','$event_type','$event_title','$starttime','$endtime') ";
 
 //if(mysqli_query($conn, $sql))
 if ($conn->query($sql) === TRUE) {
    echo "<h3>Data stored in a database successfully." 
        . " Please browse your localhost php my admin" 
        . " to view the updated data</h3>"; 

} else{
    echo "ERROR: $sql. " 
        . mysqli_error($conn);
      
}

      }
        
    if(isset($_POST['submit']))
    {  
    if($on_dateErr == "" && $classroom_noErr == "" && $event_typeErr == "" && $event_titleErr == "" && $start_timeErr == "" && $end_timeErr == "") {  
        echo "<b>Classroom allotment successful.</b> ";  
        echo "<h2> Your Input: </h2>";  
        echo "Date: " .$on_date;  
        echo "<br>";  
        echo "Classroom Number: " .$classroom_no;  
        echo "<br>";  
        echo "Event Type: " .$event_type;  
        echo "<br>";  
        echo "Event Title: " .$event_title;
        echo "<br>";
        echo "Start Time: ".$start_time;
        echo "<br>";
        echo "End Time: ".$end_time;
    } else {  
        echo "<h3> <b>Kindly check the filled details once again.</b> </h3>";  
    }  
    } 
    
   
mysqli_close($conn);
?>
</centre>
</body>
</html>