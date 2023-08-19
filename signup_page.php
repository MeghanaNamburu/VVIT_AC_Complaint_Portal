<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Student Signup</title>
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
if(isset($_POST['insert'])) {
$stu_name = $_POST["stu_name"];
$stu_mail = $_POST["stu_mail"];
$stu_pwd = $_POST["password"];
$stu_rpwd = $_POST["rpassword"];
$ques = $_POST["security_questions"];
$ans = $_POST["security_answer"];

require_once "database.php";
$errors = array();
if(empty($stu_name) || empty($stu_mail) || empty($stu_pwd) || empty($stu_rpwd) || empty($ques) || empty($ans)){
    array_push($errors,"Please fill all the details");
}
if(!filter_var($stu_mail, FILTER_VALIDATE_EMAIL)){
    array_push($errors,"Email is not valid");
}
if(strlen($stu_pwd) <8){
    array_push($errors,"Password must be 8 characters long");
}
if($stu_pwd !== $stu_rpwd){
    array_push($errors,"Password doesn't match");
}
if (empty($ques)) {
    array_push($errors, "Please select a security question");
}
$sql1 = "SELECT * FROM signup WHERE email='$stu_mail'";
$qry1 = mysqli_query($conn, $sql1);
$rowcount = mysqli_num_rows($qry1);
if($rowcount >0){
    array_push($errors,"Email already exists");
}
if(count($errors)>0){
    foreach($errors as $error){
        echo "<div class='alert alert-danger'id='wrong' >$error</div>";
    }
}else{
    $ans=strtolower($ans);
    $sql = "INSERT INTO `signup`(`name`, `email`, `password`, `repeat_password`, `security_ques`, `security_ans`) VALUES ('$stu_name','$stu_mail','$stu_pwd','$stu_rpwd','$ques','$ans')";
    $qry = mysqli_query($conn, $sql);
    if($qry){
       echo "<div class='alert alert-success' id='right'>You are registered successfully</div>";
    }else {
        die("something went wrong");
    }
}


}
?>
        <form method="post" action="">
            <div class="user-box">
                <input type="text" name="stu_name" required="" placeholder="Name">
            </div>
            <div class="user-box">
                <input type="email" name="stu_mail" required="" placeholder="Mail Id">
            </div>
            <div class="user-box">
                <input type="password" name="password" required="" placeholder="Password">
            </div>
            <div class="user-box">
                <input type="password" name="rpassword" required="" placeholder="Repeat Password">
            </div>
            <select  name="security_questions">
                <option value="0">Select a security question</option>
                <option value="1">What is your pet's name?</option>
                <option value="2">What is your favorite color?</option>
                <option value="3">What street did you live on in third grade?</option>
                <option value="4">Name of town where you were born?</option>
            </select>
            <div class="user-box">
                <input type="text" name="security_answer" placeholder="Security answer" required>
            </div>
            <center><button name="insert" type="submit" class="login_btn">SIGN UP</button></center>
            <br>
            <div><label style="font-size:18px;color:#7b7a7a;font-weight:bold;">Already have an account?
                <a href="login_page.php" style="text-decoration:underline;">Login</a></label>
            </div>
        </form>
    </div>

</body>

</html>