<!DOCTYPE html>  
<html>  
<head>  
<style>  
.error {color: red;}  
*{
	margin:0px;   
	padding:0px;
	box-sizing:border-box;
	font-family:sen-serif;
	text-decoration:none;
}
body{
	background-image:url("cof.jpg") ;
	width: 100%;
	height:100%;
  background-size:cover;
  background-color:rgba(154, 156, 233, 0.3);
}
header{
	position:fixed;
	top:0;
	left:0; right:0;
	background:#534666;
	padding:15px;
	font-size:25px;
	text-align:center;
	color:#C6CEFF;
}
.form{
position:absolute;
top:10%;
left:40%;
width:300px;
margin-bottom:20px;
}
.form input{
font-size:16px;
padding:10px 5px;
width:100%;
border:0;
border-radius:5px;
outline:none;
}
.form button{
font-size:18px;
font-weight:bold;
margin:10px 0;
padding:10px 15px;
width:49%;
border:0;
border-radius:5px;
background-color:#fff;
left:80%;
}
</style>  
</head>  
<body>
  <header>TIME ALLOTMENT FORM</header>
<centre>
<?php  
$on_dateErr = $classroom_noErr = $event_typeErr = $event_titleErr = $start_timeErr = $end_timeErr = "";
$on_date = $classroom_no = $event_type = $event_title = $start_time = $end_time = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  
//date 
    if (empty($_POST["on_date"])) {  
        $on_dateErr = "Date is required";  
   } else {  
       $on_date = input_data($_POST["on_date"]);    
           if (!($on_date> date('2022-06-27')) && (!($on_date < date('2022-07-07')))) {  
               $on_dateErr = "Enter a valid date between June 29th and July 7th.";  
           }  
   }  
}

//classroom number  
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (empty($_POST["classroom_no"])) {  
        $classroom_noErr = "Classroom number is required";  
   } else { 
      $classroom_no = input_data($_POST["classroom_no"]); 

      if (!preg_match ("/^[0-9]*$/", $classroom_no) ) {  
        $classroom_noErr = "Please enter a valid classroom number."; 
      }

      if(strlen($classroom_no)!=4){
        $classroom_noErr = "Classroom number can be 3 digits only.";
        }
    }
  }

//event type
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (empty($_POST["event_type"])) {  
       $event_typeErr = "Event type is required.";  
    } else {  
      $event_type = input_data($_POST["event_type"]);  
      
      if (!preg_match("/^[a-zA-Z ]*$/",$event_type)) {  
        $event_typeErr = "Please enter only letters.";  
      }  
    }
  }

//event title
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (empty($_POST["event_title"])) {  
        $event_titleErr = "Event title is required.";  
     } else {  
       $event_title = input_data($_POST["event_title"]);  
       if (!preg_match("/^[a-zA-Z ]*$/",$event_title)) {  
         $event_titleErr = "Please enter only letters.";  
       }  
      }
    }

//start time
     if ($_SERVER["REQUEST_METHOD"] == "POST") { 
     if (empty($_POST["start_time"])) { 
        $start_timeErr = "Start Time is required.";  
    } else {  
        $start_time = input_data($_POST["start_time"]);  
      } 
    }

//end time
      if ($_SERVER["REQUEST_METHOD"] == "POST") { 
      if (empty($_POST["end_time"])) { 
        $end_timeErr = "End Time is required.";  
    } else {  
        $end_time = input_data($_POST["end_time"]);  
      } 
}

function input_data($data) {  
    $data = trim($data);   
    $data = stripslashes($data);    
    $data = htmlspecialchars($data);  
    return $data;  
  }  
?>  
<div  class="form">
<span class = "error">* required field </span>  
<br><br>  
<form  action= "FormToDB.php" method="post" > 
 
    DATE:   
    <span class="error">* <?php echo $on_dateErr; ?> </span>  
    <input type="date" name="on_date" required>  
    
    <br><br>  

    CLASS ROOM NUMBER: 
    <span class="error">* <?php echo $classroom_noErr; ?> </span>    
    <input type="text" name="classroom_no" required>  
    
    <br><br>  

    EVENT TYPE:
    <select name="event_type" id="event_type" required>
      <option value="exam">EXAM</option>
      <option value="seminar">SEMINAR</option>
      <option value="workshop">WORKSHOP</option>
      <option value="programs">PROGRAMS</option>
      <option value="others">OTHERS</option>
    </select> 
    <span class="error">* <?php echo $event_typeErr; ?> </span>
    <br><br>

    EVENT TITLE:
    <span class="error">* <?php echo $event_titleErr; ?> </span>
    <input type="text" name="event_title" required>  
    <br><br> 

    START TIME:
    <span class="error">* <?php echo $start_timeErr; ?> </span>
    <input type="time" name="start_time" required>
    <br><br> 

    END TIME: 
    <span class="error">*</span> <?php echo $start_timeErr; ?> 
    <input type="time" name="end_time" required>
    <br><br> 

    <button type="submit">SUBMIT</button>
    <button type="submit">RESET</button>  
    <br><br>   
</form>  
</div>
<?php  
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
        echo "<h3><b>Kindly check the filled details once again.</b></h3>";  
    }  
    }  
?> 
</centre>  
</body>  
</html>  