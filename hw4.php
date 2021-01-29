<!DOCTYPE html>
<html lang="en">

<head>
    <title> Form for Calculation </title>
</head>

<body>
    <center>
        <?php
        if (isset($_GET['submit'])) {
            $name[0] = $_GET['sub1'];
            $name[1] = $_GET['sub2'];
            $name[2] = $_GET['sub3'];
            $name[3] = $_GET['sub4'];
            $name[4] = $_GET['sub5'];
            $credit[0] = $_GET['credit1'];
            $credit[1] = $_GET['credit2'];
            $credit[2] = $_GET['credit3'];
            $credit[3] = $_GET['credit4'];
            $credit[4] = $_GET['credit5'];
            $grade[0] = $_GET['grade1'];
            $grade[1] = $_GET['grade2'];
            $grade[2] = $_GET['grade3'];
            $grade[3] = $_GET['grade4'];
            $grade[4] = $_GET['grade5'];
            $gradenum[0] = $gradenum[1] = $gradenum[2] = $gradenum[3] = $gradenum[4] = 0;
        }
        ?>
        <form>
            <table border="1" align="center" width="500">
                <tr>
                    <td colspan="4" align="center"><big> Grade Period Average </big></td>
                </tr>
                <tr>
                    <td width=10px>1</td>
                    <td>Name Subject : <input type="text" name="sub1" size="15" value="" /> </td>
                    <td>credit : <input type="text" name="credit1" size="1" value="" /> </td>
                    <td>Grade : <input type="text" name="grade1" size="1" value="" /> </td>
                </tr>
                <tr>
                    <td width=10px>2</td>
                    <td>Name Subject : <input type="text" name="sub2" size="15" value="" /> </td>
                    <td>credit : <input type="text" name="credit2" size="1" value="" /> </td>
                    <td>Grade : <input type="text" name="grade2" size="1" value="" /> </td>
                </tr>
                <tr>
                    <td width=10px>3</td>
                    <td>Name Subject : <input type="text" name="sub3" size="15" value="" /> </td>
                    <td>credit : <input type="text" name="credit3" size="1" value="" /> </td>
                    <td>Grade : <input type="text" name="grade3" size="1" value="" /> </td>
                </tr>
                <tr>
                    <td width=10px>4</td>
                    <td>Name Subject : <input type="text" name="sub4" size="15" value="" /> </td>
                    <td>credit : <input type="text" name="credit4" size="1" value="" /> </td>
                    <td>Grade : <input type="text" name="grade4" size="1" value="" /> </td>
                </tr>
                <tr>
                    <td width=10px>5</td>
                    <td>Name Subject : <input type="text" name="sub5" size="15" value="" /> </td>
                    <td>credit : <input type="text" name="credit5" size="1" value="" /> </td>
                    <td>Grade : <input type="text" name="grade5" size="1" value="" /> </td>
                </tr>
                <tr>
                    <td colspan="4" align="center">
                        <input type=submit name=submit value=Submit />
                        <input type="reset" value=" Clear " />
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_GET['submit'])) {
            $GPA = 0;
            $creditAll = 0;
            for ($x = 0; $x < 5; $x++) {
                if ($grade[$x] == 'A') {
                    $gradenum[$x] = 4;
                }
                if ($grade[$x] == 'B+') {
                    $gradenum[$x] = 3.5;
                }
                if ($grade[$x] == 'B') {
                    $gradenum[$x] = 3;
                }
                if ($grade[$x] == 'C+') {
                    $gradenum[$x] = 2.5;
                }
                if ($grade[$x] == 'C') {
                    $gradenum[$x] = 2;
                }
                if ($grade[$x] == 'D+') {
                    $gradenum[$x] = 1.5;
                }
                if ($grade[$x] == 'D') {
                    $gradenum[$x] = 1;
                }
                if ($grade[$x] == 'F') {
                    $gradenum[$x] = 0;
                }
                $creditAll += $credit[$x];
                $GPA += ($gradenum[$x] * $credit[$x]);
            }
            echo "<br><br>";
            echo "<table align='center' width='500' border='1'>";
            echo "<tr><td colspan='3' align='center'><b>Database</b></td></tr>";
            echo "<tr><td style='text-align:center'>Name Subject:</td><td style='text-align:center'> Credit </td><td style='text-align:center'> Grade </td></tr>";
            for ($x = 0; $x < 5; $x++) {
                echo "<tr><td style='text-align:center'>$name[$x]</td><td style='text-align:center'>$credit[$x]</td><td style='text-align:center'>$gradenum[$x]</td></tr>";
            }
            $GPA /= $creditAll;
            echo "<tr><td>Result :</td><td style='text-align:center' colspan='2'> ".round($GPA, 2)." </td></tr>";
            echo "</table>";
        }
        ?>
    </center>
</body>

</html>