<!DOCTYPE HTML>
    <html>  
    <body>
        <form action="hw1.php" method="get">
            <center>
                <h1>HW1 : Find Min Max Average</h1>
                Num 1 : <input type="text" id="num1" name="num1"><br><br>
                Num 2 : <input type="text" id="num2" name="num2"><br><br>
                Num 3 : <input type="text" id="num3" name="num3"><br><br>
                <input type="radio" id="select" name="select" value="min">
                <label for="min">Minimum</label><br>
                <input type="radio" id="select" name="select" value="max">
                <label for="max">Maximum</label><br>
                <input type="radio" id="select" name="select" value="average">
                <label for="average">Average</label><br><br>
                <button type="submit">Submit</button><br><br>
                <?php
                    if($_GET['select'] == 'min'){
                        echo "<h4>Minimum Number = ".min($_GET['num1'],$_GET['num2'],$_GET['num3'])."</h4>";
                    }
                    else if($_GET['select'] == 'max'){
                        echo "<h4>Maximum Number = ".max($_GET['num1'],$_GET['num2'],$_GET['num3'])."</h4>";
                    }
                    else if($_GET['select'] == 'average'){
                        $total = ($_GET['num1']+$_GET['num2']+$_GET['num3'])/3;
                        echo "<h4>Maximum Number = ".$total."</h4>";
                    }
                ?>
            </center>
        </form>
    </body>
</html>