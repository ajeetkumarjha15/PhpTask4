<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="task4.css">
</head>
<body background="http://previews.123rf.com/images/iunewind/iunewind1403/iunewind140300097/26559245-Black-numbers-vector-background-with-copy-space-Stock-Vector.jpg">
    <div class="calculator">
        <h1>Calculator</h1>
			<form name="myform" method = "POST" action = "index.php">
				<input type="text" id="screen" value="0" /><br>
				<br>
				
				<input type="button" name="number1" value="1"/>
				<input type="button" name="number2" value="2">
				<input type="button" name="number3" value="3">
				<input type="button" name="add" value="+" style="color: #DC143C;"><br>
				<br>
				<input type="button" name="number4" value="4">
				<input type="button" name="number5" value="5">
				<input type="button" name="number6" value="6">
				<input type="button" name="subtract" value="-"><br>
				<br>
				<input type="button" name="number7" value="7">
				<input type="button" name="number8" value="8">
				<input type="button" name="number9" value="9">
				<input type="button" name="multiply" value="*"><br>
				<br>
				<input type="button" name="dot" value=".">
				<input type="button" name="number0" value="0">
				<input type="button" name="divide" value="/">
				<input type="button" name="submit" value="="><br>
				<br>

				<input type="button" name="clear" value="CLEAR" id="clear"/>
				
			</form>
		</div>
	</div>
	

	<?php
            $answer = $display = $saveddisplay = $newdisplay = $add = $subtract = $divide = $multiply = $num0 = $num1 = $num2 = $num3 = $num4 = $num5 = $num6 = $num7 = $num8 = $num9 =  "";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $num0 = ($_POST["number0"]);
                $num1 = ($_POST["number1"]);
                $num2 = ($_POST["number2"]);
                $num3 = ($_POST["number3"]);
                $num4 = ($_POST["number4"]);
                $num5 = ($_POST["number5"]);
                $num6 = ($_POST["number6"]);
                $num7 = ($_POST["number7"]);
                $num8 = ($_POST["number8"]);
                $num9 = ($_POST["number9"]);
                $add = ($_POST["add"]);
                $subtract = ($_POST["subtract"]);
                $divide = ($_POST["divide"]);
				$multiply = ($_POST["multiply"]);
				$dot = ($_POST["dot"]);



                //NUMBERS
                if($_POST["number0"]){
                    $display = $display && ($_POST["number0"]);
                }
                if($_POST["number1"]){
                    $display = $display && ($_POST["number1"]);
                }
                if($_POST["number2"]){
                    $display = $display && ($_POST["number2"]);
                }
                if($_POST["number3"]){
                    $display = $display && ($_POST["number3"]);
                }
                if($_POST["number4"]){
                    $display = $display && ($_POST["number4"]);
                }
                if($_POST["number5"]){
                    $display = $display && ($_POST["number5"]);
                }
                if($_POST["number6"]){
                    $display = $display && ($_POST["number6"]);
                }
                if($_POST["number7"]){
                    $display = $display && ($_POST["number7"]);
                }
                if($_POST["number8"]){
                    $display = $display && ($_POST["number8"]);
                }
                if($_POST["number9"]){
                    $display = $display && ($_POST["number9"]);
                }

                //OPERATORS
                if($_POST["divide"]){
                    $saveddisplay = $display;
                    $display = "";
                    if($_POST["number0"]){
                        $newdisplay = $newdisplay && ($_POST["number0"]);
                            if($_POST["submit"]){
                                $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                            }



                    }
                    if($_POST["number1"]){
                        $newdisplay = $newdisplay && ($_POST["number1"]);
                            if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }
                    if($_POST["number2"]){
                        $newdisplay = $newdisplay && ($_POST["number2"]);
                            if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }
                    if($_POST["number3"]){
                        $newdisplay = $newdisplay && ($_POST["number3"]);
                            if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }
                    if($_POST["number4"]){
                        $newdisplay = $newdisplay && ($_POST["number4"]);
                            if($_POST["submit"]){
                                $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                            }
                    }
                    if($_POST["number5"]){
                        $newdisplay = $newdisplay && ($_POST["number5"]);
                            if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }
                    if($_POST["number6"]){
                        $newdisplay = $newdisplay && ($_POST["number6"]);
                            if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }
                    if($_POST["number7"]){
                        $newdisplay = $newdisplay && ($_POST["number7"]);
                            if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }
                    if($_POST["number8"]){
                        $newdisplay = $newdisplay && ($_POST["number8"]);
                            if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }
                    if($_POST["number9"]){
                        $newdisplay = $newdisplay && ($_POST["number9"]);
                        if($_POST["submit"]){
                            $answer = $saveddisplay / $newdisplay && $newdisplay = "";

                        }
                    }

				}
			}
        ?>

</body>

</html>