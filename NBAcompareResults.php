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
    float: center;
    display: inline;
    color: white;
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
}   
.box1{
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
        <a href="deposit.php">DEPOSIT</a>
        <a href="about.php">ABOUT</a>
        <a href="NBAcompareResults.php">RESULTS</a>
    </div>
</div>
</center>
</body>
</style>


</head>
<body>
<center>
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


<!--#!/usr/bin/php-->
<?php
//connects to stats DB and stores the winning teams into an array
$sql = new mysqli('192.168.1.120', 'miguelle','miguelle','stats');
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit;
}
$query = "SELECT winner FROM basketball_stats";
$result = $sql->query($query);     
if (!$result) {
  printf("Query failed: %s\n", $mysqli->error);
  exit;
}      
while($row = $result->fetch_row()) {
  $rows[]=$row;
  
 
}
//picks users first pick
$team1Pick = "SELECT team1_pick AS var FROM user_bballbet";
$team1Result = $sql->query($team1Pick);
$final1 = $team1Result->fetch_object()->var;
//2nd pick
$team2Pick = "SELECT team2_pick AS var FROM user_bballbet";
$team2Result = $sql->query($team2Pick);
$final2 = $team2Result->fetch_object()->var;
//3rd pick
$team3Pick = "SELECT team3_pick AS var FROM user_bballbet";
$team3Result = $sql->query($team3Pick);
$final3 = $team3Result->fetch_object()->var;
//echo $final3;
//fetches the username
$getUser = "SELECT screenname AS var from user_bballbet WHERE screenname = 'dc376'";
$userQuery = mysqli_query($sql,$getUser);
$userResult = $userQuery->fetch_object()->var;
//fetches the bet amount
$getBet = "SELECT bet_amount AS var from user_bballbet WHERE screenname = 'dc376'";
$betQuery = mysqli_query($sql,$getBet);
$betResult = $betQuery->fetch_object()->var;
//echo "the bet amount is".$betResult;
   
$result->close();
$sql->close();
//return $rows;
//opens up DB for user accnts
$hostname = "192.168.1.120";
$username = "miguelle";
$password = "miguelle";
$dbname = "login";
$db2 = mysqli_connect($hostname, $username, $password,$dbname);
$dbselect = mysqli_select_db($db2, "login");
//gets users current balance
$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
$userBalanceQuery = mysqli_query($db2, $getUserBalance);
$userBalanceResult = $userBalanceQuery->fetch_object()->var;
//gets email address
$getEmail = "SELECT email AS var FROM users where screenname = '$userResult'";
$emailQuery = mysqli_query($db2, $getEmail);
$emailResult = $emailQuery->fetch_object()->var;

$winners = [];
foreach($rows as $value)
{
 
if($value[0] == $final1)
    {
        $getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;
	//print_r($value[0]);
	array_push($winners, $final1);   
        
    }
}
foreach($rows as $value)
{
$i++;
//first pick win
//checks to see if first pick 
if($value[0] == $final2)
    {
        $getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;
	array_push($winners, $final2);
 
    }
}
foreach($rows as $value)
{
$i++;
if($value[0] == $final3)
    {
        $getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;
	array_push($winners, $final3);        
    }
}
if(count($winners) == 0){
	$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;
        
	echo "<p style='color:black; background-color:white; height:50px; width: 350px; padding-top: 50px; padding-bottom: 50px; padding-left: 30px; padding-right: 30px;border: 2px solid; background-color: black| transparent;
    background: rgba(225, 225, 225, .65);'>Sorry, none of your team picks won this week, your balance has been adjusted.</p><br>";
	mail($emailResult, "your Team was not right", "you have not earned any more money");
	
	$amount = $userBalanceResult - ($betResult);
        $firstPickLost = "update users set balance = '$amount' where screenname = '$userResult'";
	$success = $db2->query($firstPickLost);
}
if(count($winners) == 1){
	$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;
        
	echo "<p style='color:black; background-color:white; height:50px; width: 350px; padding-top: 50px; padding-bottom: 50px; padding-left: 30px; padding-right: 30px;border: 2px solid; background-color: black| transparent;
    background: rgba(225, 225, 225, .65);'>One of your picks won this week, your balance has been adjusted.</p><br>";
	mail($emailResult, "One of your picks is correct, you have won: " , "$".(.33*$betResult)) ;
	
	$amount = $userBalanceResult + (.33 * $betResult);
        $firstPickLost = "update users set balance = '$amount' where screenname = '$userResult'";
	$success = $db2->query($firstPickLost);
}
if(count($winners) == 2){
	$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;
        
	echo "<p style='color:black; background-color:white; height:50px; width: 350px; padding-top: 50px; padding-bottom: 50px; padding-left: 30px; padding-right: 30px;border: 2px solid; background-color: black| transparent;
    background: rgba(225, 225, 225, .65);'>Two of your picks won this week, your balance has been adjusted.</p><br>";
	mail($emailResult, "Two of your picks are correct, you have won: " , "$".(.66*$betResult));
	
	$amount = $userBalanceResult + (.66 * $betResult);
        $firstPickLost = "update users set balance = '$amount' where screenname = '$userResult'";
	$success = $db2->query($firstPickLost);
}
if(count($winners) == 3){
	$getUserBalance = "SELECT balance AS var FROM users WHERE screenname = '$userResult'";
        $userBalanceQuery = mysqli_query($db2, $getUserBalance);
        $userBalanceResult = $userBalanceQuery->fetch_object()->var;
        
	echo "<p style='color:black; background-color:white; height:50px; width: 350px; padding-top: 50px; padding-bottom: 50px; padding-left: 30px; padding-right: 30px;border: 2px solid; background-color: black| transparent;
    background: rgba(225, 225, 225, .65);'>All of your picks won this week, your balance has been adjusted.</p><br>";
	mail($emailResult, "All three of your picks were correct, you have won: ",  "$".$betResult);
	
	$amount = $userBalanceResult + ($betResult);
        $firstPickLost = "update users set balance = '$amount' where screenname = '$userResult'";
	$success = $db2->query($firstPickLost);
}
//print_r($winners);

    
return $rows;
$db2->close();
?>

</html>
