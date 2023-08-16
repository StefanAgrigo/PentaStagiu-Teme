<?php
require 'Autoloader.php';

use Calculator\Calculator;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    switch ($operation) {
        case "+":
            $result = Calculator::plus($num1, $num2);
            break;
        case "-":
            $result = Calculator::minus($num1, $num2);
            break;
        case "*":
            $result = Calculator::multiple($num1, $num2);
            break;
        case "/":
            $result = Calculator::divide($num1, $num2);
            break;
        default:
            $result = "Invalid operation";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
</head>
<body>
<h2>Basic Calculator</h2>
<form method="POST" action="">
    <input type="number" name="num1" step="0.01" required>
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="num2" step="0.01" required>
    <input type="submit" value="Calculate">
</form>
<?php if (isset($result)) : ?>
    <h3>Result: <?php echo $result; ?></h3>
<?php endif; ?>
</body>
</html>
