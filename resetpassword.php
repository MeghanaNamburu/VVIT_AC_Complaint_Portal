<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Reset Password</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='login_page.css'>
    <script src='main.js'></script>
    <link rel="apple-touch-icon" sizes="180x180" href="hello/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="hello/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="hello/favicon-16x16.png">
    <link rel="manifest" href="hello/site.webmanifest">
</head>

<body>

    <div class="login-box">
        <center><img src="vvitlogo.jpg"></center>
        <?php
            if(isset($_POST['confirm'])) {
                $stu_mail = $_POST["stu_mail"];
                $stu_pwd = $_POST["password"];
                $stu_cpwd = $_POST["cpassword"];
                $ques = $_POST["security_questions"];
                $ans = $_POST["security_answer"];

                require_once "database.php";
                $errors = array();
                if(empty($stu_mail) || empty($stu_pwd) || empty($stu_cpwd) || empty($ques) || empty($ans)){
                    array_push($errors,"Please fill all the details");
                }
                if(!filter_var($stu_mail, FILTER_VALIDATE_EMAIL)){
                    array_push($errors,"Email is not valid");
                }
                if(strlen($stu_pwd) <8){
                    array_push($errors,"Password must be 8 characters long");
                }
if($stu_pwd !== $stu_cpwd){
    array_push($errors,"Password doesnot match");
}
if (empty($ques) ) {
    array_push($errors, "Please select a security question");
}
$sql1 = "SELECT * FROM signup WHERE email='$stu_mail'";
$qry1 = mysqli_query($conn, $sql1);
$rowcount = mysqli_num_rows($qry1);
if($rowcount <=0){
    array_push($errors,"Email doesn't exists");
}
if(count($errors)>0){
    foreach($errors as $error){
        echo "<div class='alert alert-danger' id='wrong'>$error</div>";
    }
}else{

    $sql2 = "SELECT * FROM signup WHERE email='$stu_mail'";
    $qry2 = mysqli_query($conn, $sql2);
    $details = mysqli_fetch_assoc($qry2);
    $ans=strtolower($ans);
    if($details['security_ques'] == $ques && $details['security_ans'] == $ans){

        $sql = "UPDATE signup SET password='$stu_pwd' WHERE email='$stu_mail'";
                $res = mysqli_query($conn, $sql);

                
                    if($res){
                        echo "<div class='alert alert-danger' id='right'>Password changed successfully</div>";
                        echo "<a href='login_page.php'>Return to Login Page</a>";
                    }else{
                        echo "<div class='alert alert-danger'>Unable to change password</div>";
                    }
    }else{
        echo "<div class='alert alert-danger' id='wrong'>Invalid security question or answer</div>";
    }
                
        }
    }
        ?>
        <form action="" method="post">
            <div class="user-box">
                <input type="email" name="stu_mail" required="" placeholder="Mail Id">
            </div>
            <select  name="security_questions">
                <option value="0">Select a question from the following options.</option>
                <option value="1">What is your pet's name?</option>
                <option value="2">What is your favorite color?</option>
                <option value="3">What street did you live on in third grade?</option>
                <option value="4">Name of town where you were born?</option>
            </select>
            <div class="user-box">
                <input type="text" name="security_answer" placeholder="Security answer" required>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="" placeholder="Reset Password">
            </div>
            <div class="user-box">
                <input type="password" name="cpassword" required="" placeholder="Confirm Reset Password">
            </div>
            <center><button name="confirm" class="login_btn">SUBMIT</button></center>
            <br>
            <div><label style="font-size:18px;color:#7b7a7a;font-weight:bold;">
            <center>  <a href="login_page.php" style="text-decoration:underline;">Go back to login</a>
            </center></label>
            </div>
        </form>
    </div>

</body>

</html>