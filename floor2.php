<?php

require_once "database.php";

// Initialize the colors array
$colors = array();

// Loop through rooms from 301 to 325
for ($roomNo = 301; $roomNo <= 325; $roomNo++) {
    $sql = "SELECT * FROM floor2 WHERE roomno = '$roomNo'";
    $qry = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($qry);
    if($row["color"] == "green"){
        $row["color"] = "rgb(255,255,255,0.85)";
    }else{
        $colors[$roomNo] = $row["color"];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Second Floor</title>
    <link rel="apple-touch-icon" sizes="180x180" href="hello/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="hello/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="hello/favicon-16x16.png">
    <link rel="manifest" href="hello/site.webmanifest">
    <link rel="stylesheet" href="demo.css" />
</head>

<body>
    <div class="c1">
    <div class="header">
           <img onclick="return location.href='index.html';" src="vvitlogo.jpg" class="logo" style="cursor:pointer;">
            <nav class="navbar">
                <a href="ground.php">Ground Floor</a>
                <a href="floor1.php">First Floor</a>
                <a href="floor2.php">Second Floor</a>
                <a href="floor3.php">Third Floor</a>
                <a href="floor4.php">Fourth Floor</a>
            </nav>

            <div class="icons">
                <a href="complaint_details.php">
                    <button class="login_btn1">HISTORY</button>
                </a>

                <a href="repair_solved.php">
                    <button class="login_btn2">CHANGE STATUS</button>
                </a>

                <img src="menubar.jpg" class="menubar" id="menu-btn">

            </div>
        </div>
        <br><br><br><br><br>

        <div class="main">
            <div class="main_part1">
                <div class="displayNumber">
                    <center>Second Floor</center>
                </div>
                <div class="details">
                    <div class="colordetail">
                    <div class="colorbox" style="background-color: rgb(255, 255, 255, 0.85);border: 2.5px solid green;"></div>
                        <div style="margin-left: 6%">No repair</div>
                    </div>
                    <div class="colordetail">
                    <div class="colorbox" style="background-color: red;border: 2.5px solid green;"></div>
                        <div style="margin-left: 6%">Repair Occured</div>
                    </div>
                </div>
            </div>

            <div class="main_part2">
                <div class="line">
                    <div style="background-color:<?= $colors[301] ?>;" class="room" onmouseover="f301(301)">301
                        <center>
                            <div class="popuptext" id="301"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[302] ?>;" class="room" onmouseover="f302(302)">302
                        <center>
                            <div class="popuptext" id="302"></div>
                        </center>
                    </div>
                <div style="background-color:<?= $colors[303] ?>;" class="room" onmouseover="f303(303)">303
                    <center>
                        <div class="popuptext" id="303"></div>
                    </center>
                </div>
            
            <div style="background-color:<?= $colors[304] ?>;" class="room" onmouseover="f304(304)">304
                <center>
                    <div class="popuptext" id="304"></div>
                </center>
            </div>
        
        <div style="background-color:<?= $colors[305] ?>;" class="room" onmouseover="f305(305)">305
            <center>
                <div class="popuptext" id="305"></div>
            </center>
        </div>
    </div>
    
    <div class="line">
        <div style="background-color:<?= $colors[306] ?>;" class="room" onmouseover="f306(306)">306
            <center>
                <div class="popuptext" id="306"></div>
            </center>
        </div>
    
    <div style="background-color:<?= $colors[307] ?>;" class="room" onmouseover="f307(307)">307
        <center>
            <div class="popuptext" id="307"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[308] ?>;" class="room" onmouseover="f308(308)">308
        <center>
            <div class="popuptext" id="308"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[309] ?>;" class="room" onmouseover="f309(309)">309
        <center>
            <div class="popuptext" id="309"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[310] ?>;" class="room" onmouseover="f310(310)">310
        <center>
            <div class="popuptext" id="310"></div>
        </center>
    </div>
    </div>
    

    <div class="line">
        <div style="background-color:<?= $colors[311] ?>;" class="room" onmouseover="f311(311)">311
            <center>
                <div class="popuptext" id="311"></div>
            </center>
        </div>
    
    <div style="background-color:<?= $colors[312] ?>;" class="room" onmouseover="f312(312)">312
        <center>
            <div class="popuptext" id="312"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[313] ?>;" class="room" onmouseover="f313(313)">313
        <center>
            <div class="popuptext" id="313"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[314] ?>;" class="room" onmouseover="f314(314)">314
        <center>
            <div class="popuptext" id="314"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[315] ?>;" class="room" onmouseover="f315(315)">315
        <center>
            <div class="popuptext" id="315"></div>
        </center>
    </div>
    </div>
    

    <div class="line">
        <div style="background-color:<?= $colors[316] ?>;" class="room" onmouseover="f316(316)">316
            <center>
                <div class="popuptext" id="316"></div>
            </center>
        </div>
   
    <div style="background-color:<?= $colors[317] ?>;" class="room" onmouseover="f317(317)">317
        <center>
            <div class="popuptext" id="317"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[318] ?>;" class="room" onmouseover="f318(318)">318
        <center>
            <div class="popuptext" id="318"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[319] ?>;" class="room" onmouseover="f319(319)">319
        <center>
            <div class="popuptext" id="319"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[320] ?>;" class="room" onmouseover="f320(320)">320
        <center>
            <div class="popuptext" id="320"></div>
        </center>
    </div>
    
    </div>

    <div class="line">
        <div style="background-color:<?= $colors[321] ?>;" class="room" onmouseover="f321(321)">321
            <center>
                <div class="popuptext" id="321"></div>
            </center>
        </div>
    
    <div style="background-color:<?= $colors[322] ?>;" class="room" onmouseover="f322(322)">322
        <center>
            <div class="popuptext" id="322"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[323] ?>;" class="room" onmouseover="f323(323)">323
        <center>
            <div class="popuptext" id="323"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[324] ?>;" class="room" onmouseover="f324(324)">324
        <center>
            <div class="popuptext" id="324"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[325] ?>;visibility:hidden;" class="room" onmouseover="f325(325)">325
        <center>
            <div class="popuptext" id="325"></div>
        </center>
    </div>
    </div>
    </div>
    </div>
    </div>

    <script src="floors.js"></script>
</body>

<script>
function f301(b) {
    var a = "<?php
            $rno="301";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f302(b) {
    var a = "<?php
            $rno="302";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f303(b) {
    var a = "<?php
            $rno="303";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f304(b) {
    var a = "<?php
            $rno="304";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f305(b) {
    var a = "<?php
            $rno="305";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f306(b) {
    var a = "<?php
            $rno="306";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f307(b) {
    var a = "<?php
            $rno="307";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f308(b) {
    var a = "<?php
            $rno="308";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f309(b) {
    var a = "<?php
            $rno="309";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f310(b) {
    var a = "<?php
            $rno="310";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f311(b) {
    var a = "<?php
            $rno="311";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f312(b) {
    var a = "<?php
            $rno="312";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f313(b) {
    var a = "<?php
            $rno="313";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f314(b) {
    var a = "<?php
            $rno="314";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f315(b) {
    var a = "<?php
            $rno="315";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f316(b) {
    var a = "<?php
            $rno="316";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f317(b) {
    var a = "<?php
            $rno="317";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f318(b) {
    var a = "<?php
            $rno="318";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f319(b) {
    var a = "<?php
            $rno="319";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f320(b) {
    var a = "<?php
            $rno="320";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f321(b) {
    var a = "<?php
            $rno="321";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f322(b) {
    var a = "<?php
            $rno="322";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f323(b) {
    var a = "<?php
            $rno="323";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f324(b) {
    var a = "<?php
            $rno="324";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}

function f325(b) {
    var a = "<?php
            $rno="325";
            require_once "database.php";
            $qry = mysqli_query($conn, "SELECT * from studentform where roomno=$rno");
            $row=mysqli_fetch_array($qry);
            if(mysqli_num_rows($qry)==1){
                $name=$row['name'];
                $mailid=$row['email'];
                $desc=$row['description'];
                $rdate=$row['date_time'];
                $d=nl2br("Name: ".$name."<br> Email: ".$mailid."<br> Description: ".$desc."<br> Date: ".$rdate);
            }
            else{
                $d="No Repair";
            }
            echo $d;   
        ?>"

    document.getElementById(b).innerHTML = a;
}
</script>

</html>