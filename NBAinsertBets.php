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
    height: 120px;
    background-color: black;
    color: white;
    text-align: left;
    padding-left: .5cm;
    padding-top: .05cm;
    padding-bottom: .8cm;
}

    
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
<div id = "css1">
<h3><font face="georgia" size="5" color="white">Players Selected</font></h3>
    <div class="topnav" id="firstTopNav">
        <a href="NBAhomepage.php">HOME</a>
        <a href="NBAdeposit.php">DEPOSIT</a>
        <a href="about.php">ABOUT</a>
        <a href="compareResults.php">RESULTS</a>
    </div>
</div>
</body>

<body>

<?php session_start();
$_SESSION['basketball'];
$_SESSION['basketball2'];
$_SESSION['basketball3'];
?>

<?php
$basketball1 = $_GET['basketball'];
$basketball2 = $_GET['basketball2'];
$basketball3 = $_GET['basketball3'];
require 'database1.php';
$conn    = Connect();
$bet    = $_POST['bet_amount'];
$query   = "INSERT into user_bets (screenname,bet_amount,qb_pick,rb_pick,wr_pick) VALUES('" . "dc376" . "','" . $bet . "','" . $_SESSION["qb"] . "','" . $_SESSION["rb"] . "','" . $_SESSION["wr"] . "')";
$success = $conn->query($query);
 
//echo "<br><br>The QB is ". $_SESSION['qb'];
//echo "<br><br>The RB is ". $_SESSION['rb'];
//echo "<br><br>The WR is ". $_SESSION['wr'];
//echo "<br><br>The bet amount is ". $bet;
 
$conn->close();
 
?>

<br>
<br>
<body>
<div class = "box1">
<p>The QB is <?=$_SESSION['basketball']?></p>
<p>The RB is <?=$_SESSION['basketball2']?></p>
<p>The WR is <?=$_SESSION['basketball3']?></p>
<p>The bet amount is <?=$bet?></p>
</div>
</body>

</html>
