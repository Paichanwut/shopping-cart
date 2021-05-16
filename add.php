<div id="shopping-cart">
<?php 
    
    $total_quantity = $_POST['quantity'];
    $total_price = $_POST['price'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $exampleRadios = $_POST['exampleRadios'];

    $carry = $_POST['carry'];
    $shipping = $_POST['shipping'];

    $con = @mysqli_connect('localhost','root','','shopping_cart');
    mysqli_set_charset($con,"utf8");

    $sql = "INSERT INTO orders (email,names,sum_price,pay,amount,carry,shipping) VALUES ('$email','$name','$total_price','$exampleRadios','$total_quantity','$carry','$shipping')";
    $query = mysqli_query($con, $sql);
?>
เพิ่มข้อมูลเสร็จแล้ว
<a href="index.php" id="btnEmpty">Back</a>

</div>