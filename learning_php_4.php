<html>
<head>
<title>A Quick Test2</title>
</head>
<body>
<h1>Chapter 4</h1>

<?php //learning_php_4.php
echo "<br>";
echo "a: [" . (20 > 9) . "]<br>";
echo "b: [" . (5 == 6) . "]<br>";
echo "c: [" . (1 == 0) . "]<br>";
echo "d: [" . (1 == 1) . "]<br>";

echo "a: [" . TRUE . "]<br>";
echo "b: [" . FALSE . "]<br>";
echo "<br>";

echo "<br>";
$myname = "Jacquelin";
$myage = 25;

echo "a: " . 73 . "<br>"; // Numeric literal
echo "b: " . "Hello" . "<br>"; // String literal
echo "c: " . FALSE . "<br>"; // Constant literal
echo "d: " . $myname . "<br>"; // String variable
echo "e: " . $myage . "<br>"; // Numeric variable
echo "<br>";

echo "<br>";
$day_number = 340;
$days_to_new_year = 366 - $day_number; // Expression
if ($days_to_new_year < 30)
{
echo "Not lomg now till new year"; // Statement
}
echo "<br>";

echo "<br>";
$total_a = "";
$total_b = "";
$total_c = ""; 

$total_a = 1+2+3-4+5;
$total_b = 2-4+5+3+1;
$total_c = 5+2-4+1+3;

echo $total_a;
echo "<br>";
echo $total_b;
echo "<br>";
echo $total_c;
echo "<br>";

echo "<br>";
$total_a = "";
$total_b = "";
$total_c = ""; 

$total_a = 1*2*3/4*5;
$total_b = 2/4*5*3*1;
$total_c = 5*2/4*1*3;

echo $total_a;
echo "<br>";
echo $total_b;
echo "<br>";
echo $total_c;
echo "<br>";

echo "<br>";
$total_a = "";
$total_b = "";
$total_c = ""; 

$total_a = 1+2*3-4*5;
$total_b = 2-4*5*3+1;
$total_c = 5+2-4+1*3;

echo $total_a;
echo "<br>";
echo $total_b;
echo "<br>";
echo $total_c;
echo "<br>";

echo "<br>";
$total_a = 1+(2*3)-(4*5);
$total_b = 2-(4*5*3)+1;
$total_c = 5+2-4+(1*3);

echo $total_a; 
echo $total_b;
echo $total_c;

echo "<br>";

?>


</body>
</html>
