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
  padding: 1px;
}
.topnav{
    overflow: hidden;
    background-color:black;
    }
.topnav a{
    float: center;
    display: inline;
    color: white;
    /**text-align: center;**/
    padding: 5px 10px;
    text-decoration: none;
    font-size: 10px;
    }
.topnav a:hover{
    background-color: lightblue;
    color: white;
}
/**.topnav a.active{
    background-color: #ee2211;
    color: red;
} **/
/**.box1{
    position: relative;
    margin: auto;
    float: center;
    width: 400px;
    font-family:"georgia";
    height: 100px;
    background-color: pink;
    text-align: left;
    padding-left: .5cm;
    padding-top: .05cm;
    padding-bottom: .8cm;
}**/
 
</style>

</head>
<body>
<center>
<div id = "css1">
<h3><font face="georgia" size="5" color="white">Kehoe's Bros Betting</font></h3>
    <div class="topnav" id="firstTopNav">
        <a href="pickaSport.php">HOME</a>
        <a href="NBAdeposit.php">DEPOSIT</a>
        <a href="about.php">ABOUT</a>
        <a href="NBAcompareResults.php">RESULTS</a>
    </div>
</div>
</center>
</body>
<style>
    { margin: 0; padding: 0; }
    html {
        background: url('https://images5.alphacoders.com/467/thumb-1920-467394.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<!--<body>-->

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
<!--</body>-->
</html>
