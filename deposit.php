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
    text-align: center;
    padding: 5px 10px;
    text-decoration: none;
    font-size: 10px;
    }
.topnav a:hover{
    background-color: lightblue;
    color: black;
}
</style>
</head>

<body>
<div id = "css1">
<center>
<h3><font face="georgia" size="5" color="white" text-align="left" float="left">Kehoe's Bros Betting</font></h3> 
    <div class="topnav" id="firstTopNav">
        <a href="pickaSport.php">HOME</a>
        <a href="deposit.php">DEPOSIT</a>
        <a href="about.php">ABOUT</a>
<!--        <a href="compareResults.php">RESULTS</a> <!--I NEED ACCESS TO THE DB-->-->
    </div>
</center>
</div>
</body>

<!--<style>
    { margin: 0; padding: 0; }
    html {
        background: url('https://i.pinimg.com/originals/2c/ba/0c/2cba0cb95b6bfdad2a7699490309d8ff.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>-->

<style>
    { margin: 0; padding: 0; }
    html {
        background: white;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .divBack{
    position: relative;
    margin: 3%;
    float: center;
    width: 45%;
    height: 50%;
    padding-bottom: .5cm;
    border: 2px solid black;
/*    background-color: black|transparent;
    background: rgba (255, 255, 255, .5);*/
    }
</style>

<center>
<br>
<br>

<body>

<div class ="divBack"><!--
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="width: 400px; padding-bottom: .8cm; padding-top: .05cm; background-color: #000000; background-color: #000000; background-color: black| transparent; background: rgba(225, 225, 225, .59);">-->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<h2><font face="georgia" size="3" color="black"><center>Place deposit money below </center></font></h2>

<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="XZPAASUHB9RPJ">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>

</body>
</html>
