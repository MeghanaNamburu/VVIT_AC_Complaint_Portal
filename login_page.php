 <?php
            if(isset($_POST['login'])) {
                $stu_mail = $_POST["stu_mail"];
                $stu_pwd = $_POST["password"];
                require_once "database.php";
                $sql = "SELECT * FROM signup WHERE email='$stu_mail'";
                $res = mysqli_query($conn, $sql);
                
                if(mysqli_num_rows($res)>0){
                    $row = mysqli_fetch_array($res);
                    $pwd = $row['password'];
                    if($pwd == $stu_pwd){
                      if($stu_mail == "admin@vvit.net" ){
                        //header("Location: ground.php");
                         $url = "ground.php";
                         echo "<script type='text/javascript'> window.location='$url';</script>";
                         echo "<META HTTP-EQIV ='refresh' content='0;URL=$url'>";
                      }else{
                        //header("Location: studentform.php");
                        $url = "studentform.php";
                         echo "<script type='text/javascript'> window.location='$url';</script>";
                         echo "<META HTTP-EQIV ='refresh' content='0;URL=$url'>";
                      }
                    }else{
                        echo "<div class='alert alert-danger' id='wrong'>Wrong Password</div>";
                    }
                }
               
            else{
                echo "<div class='alert alert-danger' id='wrong' >Mail doesnot exists</div>";
            }
        }
        ?>
        
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='login_page.css'>
    <link rel="apple-touch-icon" sizes="180x180" href="hello/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="hello/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="hello/favicon-16x16.png">
    <link rel="manifest" href="hello/site.webmanifest">
    <script src='main.js'></script>
</head>

<body>

    <div class="login-box">
        <center><img src="vvitlogo.jpg"></center>
        
       
        <form action="" method="post">
            <div class="user-box">
                <input type="email" name="stu_mail" required="" placeholder="Mail Id">
            </div>
            <div class="user-box">
                <input type="password" name="password" required="" placeholder="Password">
            </div>
            <center><button name="login" class="login_btn">LOGIN</button></center>
            <p><label style="font-size:18px;color:#7b7a7a;font-weight:bold;"><a href="resetpassword.php" style="text-decoration:underline;">Forgot Password</a></label></p>
            <div><label style="font-size:18px;color:#7b7a7a;font-weight:bold;">Don't have an account?
                <a href="signup_page.php" style="text-decoration:underline;">Signup</a></label>
            </div>
        </form>
    </div>

</body>

</html>