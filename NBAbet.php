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

<body>

<?php
session_start();
// retrieve the form data by using the element's name attributes value as key 


//require('betFunc.php.inc');

$basketball = $_GET['basketball']; 
$basketball2 = $_GET['basketball2']; 
$basketball3 = $_GET['basketball3'];
$_SESSION['basketball'] = $basketball;
$_SESSION['basketball2'] = $basketball2;
$_SESSION['basketball3'] = $basketball3;
?>

<style>
.box1{
    position: relative;
    margin: auto;
    float: center;
    width: 290px;
    font-family:"georgia";
    height: 150px;
    background-color: black;
    color: black;
    text-align: left;
    padding-left: .5cm;
    padding-top: .05cm;
    padding-bottom: .8cm;
    background-color: black| transparent;
    background: rgba(225, 225, 225, .59);
}

</style>
<center>
<br>
<br>
<body>
<div class = "box1">
<h2><font face="georgia" size="4" color="black"><center>Selected Team</center></font></h2>
<p>Team 1:     <?=$_SESSION['basketball']?></p>
<p>Team 2:     <?=$_SESSION['basketball2']?></p>
<p>Team 3:     <?=$_SESSION['basketball3']?></p>
</div>
</body>
<br>
<br>
<br>

<body>


<form name="thisForm" action="NBAinsertBets.php" method="post" style="width: 410px; padding-bottom: .8cm; padding-top: .05cm; background-color: #000000; background-color: black| transparent; background: rgba(225, 225, 225, .59);">

<h2><font face="georgia" size="3" color="black"><center>Place your bet below</center></h2> 
    
    
    <label><font size="2"><b>Bet Amount: </b></font></label>
    <input type="text" name="bet_amount" style="width: 100px;" required>
    <div class="clearfix">
      <br>
	<button type="submit" class="signupbtn">Submit Bets!</button>
</form>

</body>
</html>
