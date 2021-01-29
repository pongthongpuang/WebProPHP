<?php

$expr1 = (1 == 1); // true
$expr2 = (10 > 20); // false

$expr3 = $expr1 && $expr2; // false
$expr4 = $expr1 || $expr2; // true
$expr5 = !$expr4; // false
echo "expr1 = $expr1\n";
echo "expr2 = $expr2\n";
echo "expr3 = $expr3\n";
echo "expr4 = $expr4\n";
echo "expr5 = $expr5\n";

echo "expr1 = " , var_dump($expr1);
echo "expr2 = " , var_dump($expr2);
echo "expr3 = " , var_dump($expr3);
echo"expr4 = " , var_dump($expr4);
echo "expr5 = " , var_dump($expr5);

?>