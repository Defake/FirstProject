<html>
<body>
<form method="POST">
Number 1: <input type="text" name="number1">
<br/>
Number 2: <input type="text" name="number2">
<br/>
<input type="button" name="operation" value='+'/>
<input type="button" name="operation" value='-'/>
<input type="button" name="operation" value='*'/>
<input type="button" name="operation" value='/'/>
<br/>
<?php
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operation = $_POST['operation'];
if ($answer=='+'){$answer = $number1 + $number2;}
else if ($operation=='-'){$answer = $number1 - $number2;}
else if ($operation=='*'){$answer = $number1 * $number2;}
else if ($operation=='/'){$answer = $number1 / $number2;}
?>
<p>Результат вычиления равен: <?php echo "$answer" ; ?></p>
</body>
</html>