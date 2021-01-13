<html>
<head><title>การก าหนดค่าตัวแปร</title></head>
<body>
<?php
$x = 100;
$y = "200";
$z = '300';
$add = $x + $y;
$sub = $z - $y;
$time = $y * $z;
$divide = $time / $z;
$message = "Hello World";
echo $x; echo "<br />";
echo $y; echo "<br />";
echo $z; echo "<br />";
echo "ผลบวก ",$x, " + ",$y," = ",$add; echo "<br />";
echo "ผลลบ ",$z, " - ",$x," = ",$sub; echo "<br />";
echo "ผลคูณ ",$y, " * ",$z," = ",$time; echo "<br />";
echo "ผลหาร ",$time, " / ",$z," = ",$divide; echo "<br />";
echo $message; echo "<br />";
?>
</body>
</html>