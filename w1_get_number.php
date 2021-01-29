<!DOCTYPE HTML>
    <html>  
    <body>
        <h1>
            <?php
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $oper = $_GET['oper'];
            ?>
            <?php echo $num1.' '.$oper.' '.$num2.' = '; ?>
            <?php
                if($oper == "+"){ echo $num1+$num2; }
                else if($oper == "-"){ echo $num1-$num2; }
                else if($oper == "*"){ echo $num1*$num2; }
                else{ echo $num1/$num2; }
            ?>
        </h1>
    </body>
</html>