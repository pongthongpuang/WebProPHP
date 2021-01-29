<!DOCTYPE HTML>
    <html>  
    <body>
        <form action="hw2.php" method="get">
            <center>
                <h1>HW2 : Sum of Number</h1>
                Num 1 : <input type="text" id="num1" name="num1"><br><br>
                <input type="radio" name="select1" value="+">
                <label for="min"> + :</label>
                <input type="radio" name="select1" value="-">
                <label for="max"> - :</label>
                <input type="radio" name="select1" value="*">
                <label for="max"> * :</label>
                <input type="radio" name="select1" value="/">
                <label for="average"> / :</label><br><br>
                Num 2 : <input type="text" id="num2" name="num2"><br><br>
                <input type="radio" name="select2" value="+">
                <label for="min"> + :</label>
                <input type="radio" name="select2" value="-">
                <label for="max"> - :</label>
                <input type="radio" name="select2" value="*">
                <label for="max"> * :</label>
                <input type="radio" name="select2" value="/">
                <label for="average"> / :</label><br><br>
                Num 3 : <input type="text" id="num3" name="num3"><br><br>
                <br>
                <button type="submit">Submit</button><br><br>
                <?php
                    $total;
                    $result;
                    if(isset($_GET['select1']) && isset($_GET['select2'])){
                        if($_GET['select1'] == "+"){
                            $total = $_GET['num1']+$_GET['num2'];
                        }
                        else if($_GET['select1'] == "-"){
                            $total = $_GET['num1']-$_GET['num2'];
                        }
                        else if($_GET['select1'] == "*"){
                            $total = $_GET['num1']*$_GET['num2'];
                        }
                        else{
                            $total = $_GET['num1']/$_GET['num2'];
                        }

                        if($_GET['select2'] == "+"){
                            $result = $total+$_GET['num3'];
                        }
                        else if($_GET['select2'] == "-"){
                            $result = $total-$_GET['num3'];
                        }
                        else if($_GET['select2'] == "*"){
                            $result = $total*$_GET['num3'];
                        }
                        else{
                            $result = $total/$_GET['num3'];
                        }
                        echo "Sum of Number = ".$result;
                    }
                ?>
            </center>
        </form>
    </body>
</html>