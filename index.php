<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <label>First Number:</label>
        <input type="text" name="nb1"> <br>
        <label>Second Numer:</label>
        <input type="text" name="nb2"> <br>

        <select name="operation">
            <option value="add">addition (+)</option>
            <option value="sub">subtraction (-)</option>
            <option value="mul">Multiplication (×)</option>
            <option value="div">division (÷)</option>
        </select>
        <input type="submit" name="submit">
    </form>

</body>
</html>
<?php

function calculate($x, $y, $op) {
    switch($op) {
        case "add":
            return $x + $y;
        case "sub":
            return $x - $y;
        case "mul":
            return $x * $y;
        case "div":
            if ($y == 0) {
                echo "Error: Cannot divide by zero";
            } return $x / $y;
        default:
            return "Invalid operator";
    }   

}

if (isset($_POST["submit"])) {

    $nb1 = $_POST["nb1"];
    $nb2 = $_POST["nb2"];
    $operation = $_POST["operation"];

    if ($nb1 == "" || $nb2 == "") {
        echo "Error: You must fill all the fields!";
    } elseif (!is_numeric($nb1) || !is_numeric($nb2)) {
        echo "Error: You Entered Non numeric values!";
    } else {
        $result = calculate($nb1, $nb2, $operation);
        echo "result: <h4>$result</h4>";
    }
    
}