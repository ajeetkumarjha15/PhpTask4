<?php
    $num = "";
    $result = "";
    $cookie_name1 = "num";
    $cookie_value1 = "";
    $cookie_name2 = "op";
    $cookie_value2 = "";

    if(isset($_POST['display'])){
        $num = $_POST['display'];
    }
    else{
        $num = "";
    }
    
    if(isset($_POST['submit'])){
        $num = $_POST['display'] . $_POST['submit'];
    }
    else{
        $num = "";
    }

    if(isset($_POST['op'])){
        $cookie_value1 = $_POST['display'];
        setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

        $cookie_value2 = $_POST['op'];
        setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");
        $num = "";
               
    }

    if(isset($_POST['clear'])){
        $num = "";
    }
       
    if(isset($_POST['equals'])){
        $num = $_POST['display'];
        
        switch($_COOKIE['op']){
            case "+":
                $result = $num + $_COOKIE['num'];
            break;

            case "-":
                $result = $num - $_COOKIE['num'];
            break;

            case "*":
                $result = $num * $_COOKIE['num'];
            break;

            case "/":
                $result = $num / $_COOKIE['num'];
            break;
        }

        $num = $result;

    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="task4.css">
   
</head>
<body  background = "http://previews.123rf.com/images/iunewind/iunewind1403/iunewind140300097/26559245-Black-numbers-vector-background-with-copy-space-Stock-Vector.jpg";>
    <div class="calculator">
        <h1>CALCULATOR</h1>
			<form name="myform" method = "POST"  action="#">
				<input type="text" id="screen" name = "display" value="<?php echo $num; ?>" /><br>
				<br>
				
				<input type="submit" name="submit" value="1"/>
				<input type="submit" name="submit" value="2"/>
				<input type="submit" name="submit" value="3"/>
                <input type="submit" name="op" value="+" style="color: #DC143C;"/>
                <br>
				<br>
				<input type="submit" name="submit" value="4"/>
				<input type="submit" name="submit" value="5"/>
				<input type="submit" name="submit" value="6"/>
                <input type="submit" name="op" value="-" style="color: #DC143C;"/>
                <br>
				<br>
				<input type="submit" name="submit" value="7"/>
				<input type="submit" name="submit" value="8"/>
				<input type="submit" name="submit" value="9"/>
                <input type="submit" name="op" value="*" style="color: #DC143C;"/>
                <br>
				<br>
				<input type="submit" name="submit" value="."/>
				<input type="submit" name="submit" value="0"/>
				<input type="submit" name="op" value="/" style="color: #DC143C;"/>
                <input type="submit" name="equals" value= "=" style="color: #DC143C;"/>
                <br>
				<br>

				<input type="submit" name="clear" value="CLEAR" id="clear" style="background-color: #DC143C;"/>
				
			</form>
		</div>
	</div>
	

	
</body>

</html>