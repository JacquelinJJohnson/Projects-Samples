<html>
<head>
<title>A Quick Test</title>
</head>
<body>
<h1>Hello World!</h1>

<?php //learning_php_3.php
$username = "Fred Smith";
echo $username;
echo "<br>";
$current_user = $username;
echo $current_user;
echo "<br>";


 //learning_php_3.php
echo "<br>";
$count = 17.5;
echo $count;
echo "<br>";
$current_count = $count;
echo $current_count;
echo "<br>";


 //learning_php_3.php
 echo "<br>";
$team = array('Bill', 'Mary', 'Mike', 'Chris', 'Anne');
echo $team[3]; // Displays the name Chris
echo "<br>";


//learning_php_3.php
echo "<br>";
$oxo = array(array('x', ' ', 'o'),
			 array('o', 'o', 'x'),
			 array('x', 'o', ' '));
echo $oxo[1][2];
echo "<br>";

//learning_php_3.php
echo "<br>";
echo 6 + 2;
echo "<br>";

//learning_php_3.php
echo "<br>";
echo $count += 1;
echo "<br>";

//learning_php_3.php
echo "<br>";
echo $count -= 1;
echo "<br>";

//learning_php_3.php
echo "<br>";
echo $count >= 8;
echo "<br>";

echo "<br>";
echo $count <= 5 or $count >= 10;
echo "<br>";

echo "<br>";
$info = 'Preface variables with a $ like this: $variable';
echo $info;
echo "<br>";

echo "<br>";
$info = 'I love my family';
echo $info;
echo "<br>";

echo "<br>";
echo "This week $count people have viewed your profile";
echo "<br>";

echo "<br>";
echo $text = 'My spelling\'s still horrible.';
echo "<br>";

echo "<br>";
echo $text = "She wrote upon it, \"Return to sender\".";
echo "<br>";

echo "<br>";
$heading = "date\tname\tpayment";
echo $heading;
echo "<br>";

echo "<br>";
$auther = "Steve Ballmer";
echo "Jack, John, James, Jake, Jared, Jacque, Jasmine, Joy, Janice, Jorden!
- $auther.";
echo "<br>";

echo "<br>";
$auther = "Bill Gates";
echo $text = "Measuring pregramming progress by lines of code is like measuring aircraft building progress by weight.
-$auther.";
echo "<br>";

echo "<br>";
$auther ="Brian W. Kerninghan";
echo <<<_END
Debugging is twice as hard as writing the code in the first place.
Therefore, If you write the code as cleverly as possible, you are,
by definition,not smart enought to dubug it.
- $auther.
_END;
echo "<br>";

echo "<br>";
$author = "Scott Adams";
echo $out = <<<_END
Normal people believe that if it ain't broke, don't fix it.
Engineers believe that if it ain't broke, it doesn't have enough
features yet.
- $author.
_END;
echo "<br>";

echo "<br>";
$number = 12345 * 67890;
echo substr($number, 3, 1);
echo "<br>";

echo "<br>";
$pi = "3.1415927";
$radius = 5;
echo $pi * ($radius * $radius);
echo "<br>";

echo "<br>";
define("ROOT_LOCATION", "/usr/local/www/");
echo $directory = ROOT_LOCATION;
echo "<br>";

echo "<br>";
function longdate($timestamp)
{
return date("l F jS Y", $timestamp);
}
echo longdate(time());
echo "<br>";

echo "<br>";
echo longdate(time() - 17 * 24 * 60 * 60);
echo "<br>";

?>


</body>
</html>
