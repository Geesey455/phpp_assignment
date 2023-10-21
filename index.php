<!DOCTYPE html>
<html>
<head>
	<title>Assignment Title</title>
</head>
<body>
<center>
<table border width="70%" cellpadding="8">
    <caption><h2>Student Information</h2></caption>
    <tbody>
        <tr>
            <th>Student ID</th>
            <td>C1201054</td>
            <th>Name</th>
            <td>Abdimalik Adde Ahmed</td>
        </tr>
        <tr>
            <th>Class</th>
            <td>CA207</td>
            <th>Department</th>
            <td>Computer Application</td>
        </tr>
        <tr>
            <th>Course</th>
            <td>PHP & MySQL</td>
            <th>Lecturer</th>
            <td>Bashir Abdinur Ahmed</td>
        </tr>
    </tbody>
</table>
</center>



</body>
</html>
<?php

echo 'Number 1 :'."<br>";
$a=5;
$b=5;
echo "Addition:"." $a + $b"." = " .$a + $b ."<br>";
echo "Substraction:"." $a - $b"." = " .$a - $b ."<br>";
echo "Multiplication:"." $a * $b"." = " .$a * $b."<br>";
echo "Division:"." $a / $b"." = " .$a / $b."<br>";
echo "Modules:"." $a % $b"." = " .$a % $b."<br>";

echo "<br><br>";

// Assignment 2: Compare two integer numbers and print the greatest one
echo 'Number 2 :'."<br>";

$a = 2;
$b = 5;

if ($a > $b) {
    echo "The greatest number is $a\n";
} elseif ($b > $a) {
    echo "The greatest number is $b\n";
} else {
    echo "Both numbers are equal\n";
}
// Assignment 3: Compare three integer numbers and print the greatest and smallest ones
echo "<br><br>";
echo 'Number 3 :'."<br>";


$a = 10;
$b = 5;
$c = 2;

$greatest = $a;
$smallest = $b;

if ($b > $greatest) {
    $greatest = $b;
}

if ($c > $greatest) {
    $greatest = $c;
}

if ($b < $smallest) {
    $smallest = $b;
}

if ($c < $smallest) {
    $smallest = $c;
}

echo "The greatest number is $greatest\n";
echo "The smallest number is $smallest\n"."<br>";

// Assignment 4: Check if a number is even or odd
echo "<br><br>";
echo 'Number 4:'."<br>";
$number=3;
if($number % 2==0){
    echo"$number is even".'<br>';
    }else{
        echo"$number is odd".'<br>';
    }
// Assignment 5: Check if a number is divisible by 3, 5, both, or none
echo "<br><br>";
echo 'Number 5:'."<br>";
$number=15;
if($number%3==0&&$number%5==0){
    echo "$number ".": Divisible by both 3 and 5".'<br>';
    }else{
        echo "$number ".'Not divisible by either of them'.'<br>';
    }
 echo "<br><br>";
// Assignment 6: Print odd numbers from 2 to 20
echo 'Number 6 :'."<br>";
$count=3;
while($count<= 20){
    echo "$count\n";
    $count+=2;
}
echo "<br><br>";

// Assignment 7: Print even numbers from 35 to 7
echo 'Number 7 :'."<br>";
for ($i=36; $i >= 8; $i-=2) { 
    echo "$i\n";

    # code...
}

// Assignment 8: Print numbers divisible by 5 from 1 to 50
echo "<br><br>";
echo 'Number 8 :'."<br>";
echo "Numbers divisible by 5 from 1 to 50: ";
for ($i = 5; $i <= 50; $i += 5) {
    echo "$i ";
}
echo "\n";

// Assignment 9: Print numbers divisible by 2 and 5 at the same time from 50 to 2
echo "<br><br>";
echo 'Number 9 :'."<br>";
for ($i=50; $i >= 2; $i--) { 
    # code...
    if($i % 2==0 && $i % 5==0){
        echo "$i \n";
    }
}
// Assignment 10: Find the reverse of a given number
echo "<br><br>";
echo 'Number 10 :'."<br>";
$num = 12345;
$reverse = 0;

while ($num > 0) {
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num = (int)($num / 10);
}

echo "The reverse of 12345 is $reverse\n";

// Assignment 11: Calculate the Lowest Common Multiple (LCM) of two positive integers
echo "<br><br>";
echo 'Number 11 :'."<br>";
$a = 8;
$b = 12;
$lcm = 0;

for ($i=max($a,$b); ;  $i++) { 
    # code...
    if($i % $a==0 && $i % $b==0){
        $lcm = $i;
        break;} 
}
echo "The LCM of $a and $b is $lcm\n";


// Assignment 12: Find the common factors of two positive integer numbers
echo "<br><br>";
echo 'Number 12 :'."<br>";
$a = 42;
$b = 70;

echo "The common factors of $a and $b are: ";
for ($i = 1; $i <= min($a, $b); $i++) {
    if ($a % $i == 0 && $b % $i == 0) {
        echo "$i ";
    }
}
echo "\n";

// Assignment 13: Calculate the Highest Common Factor (HCF) of two integer numbers
echo "<br><br>";
echo 'Number 13 :'."<br>";
$number1 = 18;
$number2 = 24;

$min = min($number1, $number2);

$hcf = 1;

for ($i = 1; $i <= $min; $i++) {
    if ($number1 % $i == 0 && $number2 % $i == 0) {
        $hcf = $i; 
    }
}
echo "The Highest Common Factor of $number1 and $number2 is: $hcf";
// Assignment 14: Calculate the factorial of a given number
echo "<br><br>";
echo 'Number 14 :'."<br>";
$num = 5;
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}
echo "The factorial of $num is $factorial\n";

// Assignment 15: Print the multiplication table (up to 12*12) using nested loops
echo "<br><br>";
echo 'Number 15 :'."<br>";
echo '<table border="1">';
for ($i = 1; $i <= 12; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 12; $j++) {
        echo '<td>' . ($i * $j) . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

// Assignment 16: Check if a number is prime or non-prime
echo "<br><br>";
echo 'Number 16 :'."<br>";
$num = 13;
$isPrime = true;

if ($num < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$num is a prime number\n";
} else {
    echo "$num is a non-prime number\n";
}

   


// Assignment 17: Print prime numbers from 10 to 50
echo "<br><br>";
echo 'Number 17 :'."<br>\n";
echo "Prime numbers from 10 to 50: ";
for ($num = 10; $num <= 50; $num++) {
    $isPrime = true;

    if ($num < 2) {
        $isPrime = false;
    } else {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    if ($isPrime) {
        echo "$num ";
    }
}
echo "\n";



// Assignment 18: Print non-prime numbers from 2 to 25
echo "<br><br>";
echo 'Number 18 :'."<br>";
echo "Non-prime numbers from 2 to 25: ";
for ($num = 2; $num <= 25; $num++) {
    $isPrime = true;

    if ($num < 2) {
        $isPrime = false;
    } else {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    if (!$isPrime) {
        echo "$num ";
    }
}
echo "\n";
echo "<br><br>";
echo 'Number 19 :'."<br>";
// Assignment 19: Print prime numbers from 100 to 6
echo "Prime numbers from 100 to 6: ";
for ($num = 100; $num >= 6; $num--) {
    $isPrime = true;

    if ($num < 2) {
        $isPrime = false;
    } else {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    if ($isPrime) {
        echo "$num ";
    }
}
echo "\n";

echo "<br><br>";
echo 'Number 20 :'."<br>";

// Assignment 20: Print non-prime numbers from 90 to 12
echo "Non-prime numbers from 90 to 12: ";
for ($num = 90; $num >= 12; $num--) {
    $isPrime = true;

    if ($num < 2) {
        $isPrime = false;
    } else {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i== 0) {
                $isPrime = false;
                break;
            }
        }
    }

    if (!$isPrime) {
        echo "$num ";
    }
}
echo "\n";

// Assignment 21: Solve Quadratic Equations
echo "<br><br>";
echo 'Number 21 :'."<br>";
$a = 2;
$b = -7;
$c = -3;

$discriminant = $b * $b - 4 * $a * $c;

if ($discriminant > 0) {
    $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
    echo "The solutions are X1 = $x1 and X2 = $x2\n";
} elseif ($discriminant == 0) {
    $x = -$b / (2 * $a);
    echo "The solution is X = $x\n";
} else {
    echo "The equation has imaginary solutions\n";
}

?>







