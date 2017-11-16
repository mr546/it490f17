<!DOCTYPE html>
<html>
<head>
<title>Kehoe's Bros Betting</title>
<style>
body {margin: 0;}
#css1{
  background-color: black;
  background-position: right bottom;
  background-repeat: repeat;
  padding: .5px;
}
.topnav{
    overflow: hidden;
    background-color:black;
    }
.topnav a{
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 5px 10px;
    text-decoration: none;
    font-size: 10px;
    }
.topnav a:hover{
    background-color: lightblue;
    color: black;
}
.topnav a.active{
    background-color: #ee2211;
    color: red;
}   
.box1{
    position: relative;
    margin: auto;
    float: center;
    width: 400px;
    font-family:"georgia";
    height: 150px;
    background-color: black;
    color:white;
    text-align: left;
    padding-left: .5cm;
    padding-top: .05cm;
    padding-bottom: .8cm;
}
    
</style>

</head>
<body>
<div id = "css1">
<h3><font face="georgia" size="5" color="white" text-align="left" float="left">Kehoe's Bros Betting</font></h3> 
<!--<h3> <font face="georgia" size="8" color="white" text-align="center" float="center">WELCOME!</font></h3></center>--> <!--MUST BE THE SAME LINE AS KEHOES BROS!!!!!-->
    <div class="topnav" id="firstTopNav">
        <a href="homepage.php">HOME</a>
        <a href="deposit.php">DEPOSIT</a>
        <a href="about.php">ABOUT</a>
        <a href="compareResults.php">RESULTS</a> <!--I NEED ACCESS TO THE DB-->
    </div>
</div>
</body>
<style>
    { margin: 0; padding: 0; }
    html {
        background: url('https://i.pinimg.com/originals/2c/ba/0c/2cba0cb95b6bfdad2a7699490309d8ff.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<body>

<?php
include "database.php";
session_start();
$con = Connect();
$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = 'dc376'";
$userBalanceQuery = mysqli_query($con, $getUserBalance);
$balanceResult = $userBalanceQuery->fetch_object()->var;
echo "current balance: " . $balanceResult;

$deposit = $_GET['amount'];
$_SESSION['amount'] = $deposit;

$deposit = $deposit + $balanceResult;
$newBalance = "UPDATE users set balance = '$deposit' where screenname = 'dc376'";
$success = $con->query($newBalance);
?>

<h2> Deposited Amount </h2>
<p> Deposited amount = <?=$_SESSION['amount']?></p>


</style>
</body>
</html><!DOCTYPE html>
<html>
<body>



</style>
</body>
</html>
