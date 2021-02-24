<?php
    $fruit=$_POST['fruit'];
    $wid=$_POST['wid'];
    $kg=$_POST['kg'];
    echo '<center>';
    if($fruit == 'banana'){
        echo '<img src="img/banana.jpg" width=$wid><br>';
        echo 'ราคา โลละ 100 บาท<br>';
        echo 'จำนวน '. $kg.'กิโลกรัม<br>';
        echo 'ราคารวม'. (100*$kg).'บาท';
        
    }
    elseif($fruit == 'watermelon'){
        echo '<img src="img/watermelon.jpg"  width=$wid><br>';
        echo 'ราคา โลละ 200 บาท<br>';
        echo 'จำนวน    '. $kg.'กิโลกรัม<br>';
        echo 'ราคารวม   '. (200*$kg).'บาท';
    }
    elseif($fruit == 'apple'){
        echo '<img src="img/apple.jpg"  width=$wid><br>';
        echo 'ราคา โลละ 300 บาท<br>';
        echo 'จำนวน      '. $kg.'กิโลกรัม<br>';
        echo 'ราคารวม     '. (300*$kg).'บาท';
    }
    echo '<form action="form.php" method="POST">';
    echo '<input type="submit" name="Back" value="Back">';
    echo  '</form>';
    echo '</center>';
?>