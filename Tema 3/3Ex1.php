<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $operation=$_POST["operation"];
    if (isset($num1) && isset($num2)){
        if ((is_int($num1) && (is_int($num2)) || (is_float($num1) && is_float($num2)))) {
            switch ($operation) {
                case "+":
                    $result = $num1 + $num2;
                    break;
                case "-":
                    $result = $num1 - $num2;
                    break;
                case "*":
                    $result = $num1 * $num2;
                    break;
                case "/":
                    if ($num2 != 0)
                        $result = $num1 / $num2;
                    else
                        $result = "error";
                    break;
//                default:
//            if(!(isset($num1) && (isset($num2))) || !((is_int($num1)) && (is_int($num2))) || !(is_float($num1) && (is_float($num2))))
//                    $result = "error default";
            }
        }
    }
    else {
        $result = "error numere";
    }
}
?>

<! DOCTYPE html>
<html lang="en">
<head>
    <title> PHP calculator </title>
</head>
<body>
<form method="POST" action="">
    <input type="number" name="num1" >
    <input type="number" name="num2" >
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="submit" value="=" name="calculate">
</form>
<?php
     if (isset($result)) : ?>
<h3>Result: <?php echo $result ?></h3>
<?php endif ?>

</body>
</html>
