<?php

require_once "database.php";

// Initialize the colors array
$colors = array();

// Loop through rooms from 301 to 325
for ($roomNo = 401; $roomNo <= 425; $roomNo++) {
    $sql = "SELECT * FROM floor3 WHERE roomno = '$roomNo'";
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
    <title>Third Floor</title>
    <link rel="stylesheet" href="demo.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="hello/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="hello/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="hello/favicon-16x16.png">
    <link rel="manifest" href="hello/site.webmanifest">
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
                    <center>Third Floor</center>
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
                    <div style="background-color:<?= $colors[401] ?>;" class="room" onmouseover="f401(401)">401
                        <center>
                            <div class="popuptext" id="401"></div>
                        </center>
                    </div>
                    <div style="background-color:<?= $colors[402] ?>;" class="room" onmouseover="f402(402)">402
                        <center>
                            <div class="popuptext" id="402"></div>
                        </center>
                    </div>
                <div style="background-color:<?= $colors[403] ?>;" class="room" onmouseover="f403(403)">403
                    <center>
                        <div class="popuptext" id="403"></div>
                    </center>
                </div>
            
            <div style="background-color:<?= $colors[404] ?>;" class="room" onmouseover="f404(404)">404
                <center>
                    <div class="popuptext" id="404"></div>
                </center>
            </div>
        
        <div style="background-color:<?= $colors[405] ?>;" class="room" onmouseover="f405(405)">405
            <center>
                <div class="popuptext" id="405"></div>
            </center>
        </div>
    </div>
    
    <div class="line">
        <div style="background-color:<?= $colors[406] ?>;" class="room" onmouseover="f406(406)">406
            <center>
                <div class="popuptext" id="406"></div>
            </center>
        </div>
    
    <div style="background-color:<?= $colors[407] ?>;" class="room" onmouseover="f407(407)">407
        <center>
            <div class="popuptext" id="407"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[408] ?>;" class="room" onmouseover="f408(408)">408
        <center>
            <div class="popuptext" id="408"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[409] ?>;" class="room" onmouseover="f409(409)">409
        <center>
            <div class="popuptext" id="409"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[410] ?>;" class="room" onmouseover="f410(410)">410
        <center>
            <div class="popuptext" id="410"></div>
        </center>
    </div>
    </div>
    

    <div class="line">
        <div style="background-color:<?= $colors[411] ?>;" class="room" onmouseover="f411(411)">411
            <center>
                <div class="popuptext" id="411"></div>
            </center>
        </div>
    
    <div style="background-color:<?= $colors[412] ?>;" class="room" onmouseover="f412(412)">412
        <center>
            <div class="popuptext" id="412"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[413] ?>;" class="room" onmouseover="f413(413)">413
        <center>
            <div class="popuptext" id="413"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[414] ?>;" class="room" onmouseover="f414(414)">414
        <center>
            <div class="popuptext" id="414"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[415] ?>;" class="room" onmouseover="f415(415)">415
        <center>
            <div class="popuptext" id="415"></div>
        </center>
    </div>
    </div>
    

    <div class="line">
        <div style="background-color:<?= $colors[416] ?>;" class="room" onmouseover="f416(416)">416
            <center>
                <div class="popuptext" id="416"></div>
            </center>
        </div>
   
    <div style="background-color:<?= $colors[417] ?>;" class="room" onmouseover="f417(417)">417
        <center>
            <div class="popuptext" id="417"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[418] ?>;" class="room" onmouseover="f418(418)">418
        <center>
            <div class="popuptext" id="418"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[419] ?>;" class="room" onmouseover="f419(419)">419
        <center>
            <div class="popuptext" id="419"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[420] ?>;" class="room" onmouseover="f420(420)">420
        <center>
            <div class="popuptext" id="420"></div>
        </center>
    </div>
    
    </div>

    <div class="line">
        <div style="background-color:<?= $colors[421] ?>;" class="room" onmouseover="f421(421)">421
            <center>
                <div class="popuptext" id="421"></div>
            </center>
        </div>
    
    <div style="background-color:<?= $colors[422] ?>;" class="room" onmouseover="f422(422)">422
        <center>
            <div class="popuptext" id="422"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[423] ?>;" class="room" onmouseover="f423(423)">423
        <center>
            <div class="popuptext" id="423"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[424] ?>;" class="room" onmouseover="f424(424)">424
        <center>
            <div class="popuptext" id="424"></div>
        </center>
    </div>
    
    <div style="background-color:<?= $colors[425] ?>;visibility:hidden;" class="room" onmouseover="f425(425)">425
        <center>
            <div class="popuptext" id="425"></div>
        </center>
    </div>
    </div>
    </div>
    </div>
    </div>

    <script src="floors.js"></script>
</body>

<script>
function f401(b) {
    var a = "<?php
            $rno="401";
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

function f402(b) {
    var a = "<?php
            $rno="402";
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

function f403(b) {
    var a = "<?php
            $rno="403";
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

function f404(b) {
    var a = "<?php
            $rno="404";
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

function f405(b) {
    var a = "<?php
            $rno="405";
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

function f406(b) {
    var a = "<?php
            $rno="406";
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

function f407(b) {
    var a = "<?php
            $rno="407";
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

function f408(b) {
    var a = "<?php
            $rno="408";
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

function f409(b) {
    var a = "<?php
            $rno="409";
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

function f410(b) {
    var a = "<?php
            $rno="410";
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

function f411(b) {
    var a = "<?php
            $rno="411";
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

function f412(b) {
    var a = "<?php
            $rno="412";
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

function f413(b) {
    var a = "<?php
            $rno="413";
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

function f414(b) {
    var a = "<?php
            $rno="414";
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

function f415(b) {
    var a = "<?php
            $rno="415";
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

function f416(b) {
    var a = "<?php
            $rno="416";
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

function f417(b) {
    var a = "<?php
            $rno="417";
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

function f418(b) {
    var a = "<?php
            $rno="418";
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

function f419(b) {
    var a = "<?php
            $rno="419";
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

function f420(b) {
    var a = "<?php
            $rno="420";
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

function f421(b) {
    var a = "<?php
            $rno="421";
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

function f422(b) {
    var a = "<?php
            $rno="422";
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

function f423(b) {
    var a = "<?php
            $rno="423";
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

function f424(b) {
    var a = "<?php
            $rno="424";
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

function f425(b) {
    var a = "<?php
            $rno="425";
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