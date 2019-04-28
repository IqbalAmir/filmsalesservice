<?php



?>

<!DOCTYPE HTML>
<html>
<head>
    <title>AddToBasket</title>
    <link rel="stylesheet" type="text/css" href="../css/views.css"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />



    <div style="text-align: center">
        <h1>Basket</h1>
    </div>
</head>



    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
    </table>



    <?php
            $total=0;
            $p =0;
            $q =0;
            echo "<table>";
            echo "<tr>";

                foreach($product as $key => $value){
                    if($key==2){

                        echo  "<td>" .$value."</td>";
                        $q=$value;
                    } else if($key==1){
                        echo "<td>".$value."</td>";
                        $p=$value;
                    } else if($key==0){
                        echo "<td>".$value."</td>";
                    }
                }
                $total = ($q*$p);
                 echo "<td>".($total)."</td>";
             echo "</tr>";
        echo "</table>";

                echo "<td></td><input type='submit' name='event' value='Proceed To Checkout'></td>";
    ?>

<form action="browse.php." method="POST">
    <a> <button class = "button" type="submit">Continue Shopping</button></a>

</form>






<section>

</section>


</html>
