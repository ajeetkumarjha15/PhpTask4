<!DOCTYPE html>
<html lang="en">
<head>
<title>Sample Calculator</title>
<meta name="description" content="Simple Calculation Using Arithmetic Operators">
<meta name="author" content="AloNe ForeVer">
</head>
<body>
<body background="http://previews.123rf.com/images/iunewind/iunewind1403/iunewind140300097/26559245-Black-numbers-vector-background-with-copy-space-Stock-Vector.jpg">
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><center>
<form name="calculator" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<input style=" color: #0000ff ; font-size: 150%;" type="text" name="num1" placeholder="Input Number 1" >
<input style=" color: #0000ff ; font-size: 150%;" type="text" name="num2" placeholder="Input number 2" > 
<select style=" color: #3336FF; font-size: 150%;" name="action">
<option>+</option>
<option>-</option>
<option>/</option>
<option>*</option>
</select>
<input style=" color: #FF0000; font-size: 150%;" type="submit" name="submit" value="Calculate" ></form></center>

<center> <h1>
<?php
if(isset($_POST["submit"])){
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$action = $_POST["action"];

if ($action=="+") {
echo '<h1> <span style="color:#0000ff;">Addition</span>' . "</br>";
$add=$num1+$num2;
echo " <input type='text' value='$add' />";
}

if ($action=="-") {
echo '<h1> <span style="color:#FF0000;">Subtraction</span>' . "</br>";
$subtract=$num1-$num2;
echo "<input type='text' value='$subtract' />";
}

if ($action=="/") {
echo '<h1> <span style="color:#0000ff;">Division</span>' . "</br>";
$divide=$num1/$num2;
echo "<input type='text' value='$divide' />";
}

if ($action=="*") {
echo '<h1> <span style="color:#FF0000;">Multiplication</span>' . "</br>";
$multiply=$num1*$num2;
echo "<input type='text' value='$multiply' />";
}
}
?></center>
</body>
</html>