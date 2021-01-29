<!DOCTYPE HTML>
    <html>  
    <body>
        <?php if(!isset($_POST['final'])){ ?>
        <form action="hw3.php" method="post">
            <h2>HW3 : Cal Grade</h2>
            1. Final 0 - 30      : <input type="text" id="final" name="final"><br><br>
            2. Midterm 0 - 30    : <input type="text" id="midterm" name="midterm"><br><br>
            3. Assignment 0 - 20 : <input type="text" id="assign" name="assign"><br><br>
            4. Homework 0 - 20   : <input type="text" id="hw" name="hw"><br><br>
            <button type="submit">Calculate</button>
        </form>
        <?php }
              else{
                  ?>
                  <h3>Final : <?php echo $_POST['final']; ?></h3>
                  <h3>Midterm : <?php echo $_POST['midterm']; ?></h3>
                  <h3>Assignment : <?php echo $_POST['assign']; ?></h3>
                  <h3>Homework : <?php echo $_POST['hw']; ?></h3>
                  <h3>Total Score = <?php echo $_POST['final']+$_POST['midterm']+$_POST['assign']+$_POST['hw']; ?></h3>
                  <h3>Your Grade is
                    <?php
                        $total = $_POST['final']+$_POST['midterm']+$_POST['assign']+$_POST['hw'];
                        if($total <= 49){ echo "F"; }
                        else if($total >= 50 && $total <= 54){ echo "D"; }
                        else if($total >= 55 && $total <= 59){ echo "D+"; }
                        else if($total >= 60 && $total <= 64){ echo "C"; }
                        else if($total >= 65 && $total <= 69){ echo "C+"; }
                        else if($total >= 70 && $total <= 74){ echo "B"; }
                        else if($total >= 75 && $total <= 79){ echo "B+"; }
                        else if($total >= 80){ echo "A"; }
                    ?>
                  </h3>
                  <?php
              }
        ?>
    </body>
</html>