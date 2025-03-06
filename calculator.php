<?php
$num1 = $_GET['num1'] ?? "0";
$num2 = $_GET['num2'] ?? "0";
$operation = $_GET['operation'] ?? "";
$result = 0;
$zero = false;
if ($operation === "+") {
    $result = $num1 + $num2;
} 
if($operation === "-") {
    if ($num1 > $num2) {
        $result = $num1 - $num2;
    } else{
        $result = $num2 - $num1;
    }
}
if ($operation === "*") {
    $result = $num2 * $num1;
}
if ($operation === "/") {
    
    if ($num1 == 0 || $num2 == 0) {
        $zero = "Division by 0 is not allowed.";
    } else{
            if($num1 > $num2){
                $result = $num1 / $num2;
            } else {
                $result = $num2 / $num1;
            }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: inline-block;
            margin: 0px auto;
        }
        input {
            width: 20px;
        }
        #num{
            min-width: 40px;
        }
    </style>
</head>
<body >
    <form method="GET" action="calc.php">
        Formule: <input id="num" type="number" name="num1">
        <input type="text" name="operation">
        <input id="num" type="number" name="num2">
        <button type="submit" style="font-weight: bold;">Calculate</button>
     </form>
     <div>
     <?php
        if ($zero) {
            echo $zero;
        } elseif($result !==""){
            echo "Result is: $result";
        }
        ?>
     </div>
</body>
</html>