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

</style>

<?php
session_start();
  $username= $_SESSION["screenname"];
  $amount= $_SESSION["amount"];
?>

<!--<form action = "depositingmoney.php" method ="get">-->

<!--<?php   
    print "Welcome $username <br>"; //need session
    print "Balance: $ $amount <br><br>"; //need session
?>-->

<center>
<br>
<br>
<body>
<!--<div class="box1">-->
<form action = "NBAdepositingmoney.php" method ="get" style="width: 400px; padding-bottom: .8cm; padding-top: .05cm; background-color: #000000; background-color: #000000; background-color: black| transparent; background: rgba(225, 225, 225, .59);">

<h2><font face="georgia" size="3" color="black"><center>Place deposit money below </center></font></h2>

    <label for="amount">Deposit Amount: </label>
    <input type = "text" name="amount"  placeholder="Enter Amount"/>
    <br>
    <br>
    <center><input type = "submit"></center>
<!--</div>-->
</form>
</body>
</html>
