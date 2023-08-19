<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Repair solved</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='login_page.css'>
    <script src='main.js'></script>
    <link rel="apple-touch-icon" sizes="180x180" href="hello/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="hello/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="hello/favicon-16x16.png">
    <link rel="manifest" href="hello/site.webmanifest">
</head>
<body>
<center><h1 style="color: black;">Repair Details</h1></center>
<form action="" method="post">
    <div class="login-box">
      <center><img src="vvitlogo.jpg"></center>
      <br>
      <?php
if(isset($_POST['insert'])) {
$rdate = $_POST['repairdate'];
$desc = $_POST['repairdesc'];
$roomno = $_POST['room_no'];

require_once "database.php" ;

if(!empty($rdate) && !empty($desc) && !empty($roomno))
    {
      $sql = "INSERT INTO `repair_solved`(`roomno`, `description`, `repairdate`) VALUES ('$roomno','$desc','$rdate')";
      $qry = mysqli_query($conn, $sql);
      if ($qry) {
        echo "<div class='alert alert-danger' id='right'>Details Submitted.</div>";
        if($roomno>100 && $roomno <= 125 ){
          $sql2 = "UPDATE groundfloor SET color = 'green' WHERE roomno='$roomno'";
        }else if($roomno>200 && $roomno <= 225){
          $sql2 = "UPDATE floor1 SET color = 'green' WHERE roomno='$roomno'";
        }else if($roomno>300 && $roomno <= 325){
          $sql2 = "UPDATE floor2 SET color = 'green' WHERE roomno='$roomno'";
        }  
        else if($roomno>400 && $roomno <= 425){
          $sql2 = "UPDATE floor3 SET color = 'green' WHERE roomno='$roomno'";
        }  
        else if($roomno>500 && $roomno <= 525){
          $sql2 = "UPDATE floor4 SET color = 'green' WHERE roomno='$roomno'";
        }  
        $qry2 = mysqli_query($conn, $sql2);
      }else{
        echo "<div class='alert alert-danger' id='right'>Details not submitted.</div>";
      }
      if($qry){
        $sql3 = "DELETE from studentform WHERE roomno='$roomno'";
        $qry3 = mysqli_query($conn, $sql3);
      }
    }else {
      echo "<div class='alert alert-danger' id='wrong'>Details not submitted.Please fill all the details.</div>";
    }
}
?>
          <div class="user-box">
            <input type="text" name="room_no" required="" placeholder="Room Number">
          </div>
          
          <div class="user-box">
            <input type="text" name="repairdesc" required="" placeholder="A/C Repair Details">
          </div>

          <div class="user-box">
            <input type="date" name="repairdate" required="" style="color:#7b7a7a">
            <label class="rdate">Date</label>
          </div>
          
         <center> <button type="submit" name="insert" class="login_btn" style="width:40%">SUBMIT</button></center>
           &emsp;&emsp; 
           
          <br>
            <div><label style="font-size:18px;color:#7b7a7a;font-weight:bold;">
            <center>  <a href="ground.php" style="text-decoration:underline;">Go back to Home</a>
            </center></label>
            </div>
      </div>

      
      </form>
      

</body>
</html>