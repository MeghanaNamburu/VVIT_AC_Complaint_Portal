<?php

if(isset($_POST['insert'])) {
  
$name = $_POST['stu_name'];
$email = $_POST['stu_email'];
$desc = $_POST['description'];
$roomno = $_POST['room_no'];

date_default_timezone_set('Asia/Kolkata');
$date_time = date('Y-m-d H:i:s');

require_once "database.php";
if(!empty($name) && !empty($email) && !empty($desc) && !empty($roomno))
    {
        if(($roomno>100 && $roomno <= 125 ) || ($roomno>200 && $roomno <= 225) || ($roomno>300 && $roomno <= 325) || ($roomno>400 && $roomno <= 425) || ($roomno>500 && $roomno <= 525)){
            
      $sql = "INSERT INTO `studentform`(`name`, `email`, `roomno`, `description`, `date_time`) VALUES ('$name','$email','$roomno','$desc','$date_time')";
      $sql2 = "INSERT INTO `repair_history`(`name`, `email`, `roomno`, `description`, `date_time`) VALUES ('$name','$email','$roomno','$desc','$date_time')";
        $qry = mysqli_query($conn, $sql);
        $qry2 = mysqli_query($conn, $sql2);

        //condition if details are submitted
        if ($qry) {
            
            if($roomno>100 && $roomno <= 125 ){
              $sql2 = "SELECT * FROM groundfloor WHERE roomno = '$roomno' AND color = 'green'";
            }else if($roomno>200 && $roomno <= 225){
              $sql2 = "SELECT * FROM floor1 WHERE roomno = '$roomno' AND color = 'green'";
            }else if($roomno>300 && $roomno <= 325){
              $sql2 = "SELECT * FROM floor2 WHERE roomno = '$roomno' AND color = 'green'";
            }  
            else if($roomno>400 && $roomno <= 425){
              $sql2 = "SELECT * FROM floor3 WHERE roomno = '$roomno' AND color = 'green'";
            }  
            else if($roomno>500 && $roomno <= 525){
              $sql2 = "SELECT * FROM floor4 WHERE roomno = '$roomno' AND color = 'green'";
            }  
            
            
            $qry2 = mysqli_query($conn, $sql2);
            
            if ($qry2->num_rows > 0) {
               
                while ($row = $qry2->fetch_assoc()) {
                    $no = $row["roomno"];
                    $color = $row["color"];
                    if ($roomno == $no  && $color === 'green') {
                        $changeColor = true; // Set the flag to true if the color needs to be changed
                    break;
                    }
                }if ($changeColor) {
                    // Update the color to red in the database
                    if($roomno>100 && $roomno <= 125 ){
                      $updateSql = "UPDATE groundfloor SET color='red' WHERE roomno='$roomno'";
                    }else if($roomno>200 && $roomno <= 225){
                      $updateSql = "UPDATE floor1 SET color='red' WHERE roomno='$roomno'";
                    }else if($roomno>300 && $roomno <= 325){
                      $updateSql = "UPDATE floor2 SET color='red' WHERE roomno='$roomno'";
                    }
                    else if($roomno>400 && $roomno <= 425){
                      $updateSql = "UPDATE floor3 SET color='red' WHERE roomno='$roomno'";
                    }
                    else if($roomno>500 && $roomno <= 525){
                      $updateSql = "UPDATE floor4 SET color='red' WHERE roomno='$roomno'";
                    }
                    $updateQry = mysqli_query($conn, $updateSql);
                    
                    
                    
                }
            }
            header("Location: thankyou.html");
            
        } else {
            echo '<script> alert("Unable to submit details!!!");  </script>';
        }
    }
    else{
        echo '<script type="text/javascript"> alert("Enter a valid room number")</script>';
    }
}
    else {
      echo '<script type="text/javascript"> alert("Details not submitted.Please fill all the details")</script>';
    }
    
}
?>

<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Complaint Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='login_page.css'>
    <script src='main.js'></script>
    <link rel="apple-touch-icon" sizes="180x180" href="hello/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="hello/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="hello/favicon-16x16.png">
    <link rel="manifest" href="hello/site.webmanifest">
</head>
<body>
  <center><h1>Complaint Form</h1></center>
<form action="" method="post">
    <div class="login-box">
   
        <div class="user-box">
          <input type="text" name="stu_name" placeholder="Name" required>
      </div>
          <div class="user-box">
            <input type="email" name="stu_email" placeholder="Mail Id" required>
        </div>
        <div class="user-box">
            <input type="text" name="room_no" placeholder="Room No" required>
          </div>
          <div class="user-box">
            <input type="textarea" name="description" placeholder="Problem" required>
          </div>
          
          <button type="submit" id="submit_button" name="insert" class="login_btn">SUBMIT</button>  
        </form>
      </div>

      
</body>
</html>