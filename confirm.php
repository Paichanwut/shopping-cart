<?php 
session_start();
require_once('dbcontroller.php');
$db_handle = new DBController();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="shopping-cart">
    <?php 
    $total_quantity = $_POST['total_quantity'];
    $total_price = $_POST['total_price'];
    ?>
    <form method="POST" action="index.php"> 
        <button type="submit" id="btnEmpty">Back</button>  
    </form>   
    <form action="add.php" id="" method="post">
    <div class="txt-heading">Order</div>
        <table class="tbl-cart" cellpadding="10" cellspacing="1">
            <tbody>
                <tr>
                    <th width="20%"></th>
                    <th width="20%"></th>
                    <th style="text-align: right;" ></th>
                    <th style="text-align: right;" >Quantity</th>
                    <th style="text-align: right;" >Price</th>
                    
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right">Total:</td>
                    <td align="right">
                        <input type="hidden" id="quantity" name="quantity" value="<?=$total_quantity?>">
                        <?=$total_quantity?>
                    </td>
                    <td align="right" colspan="2">
                        <input type="hidden" id="price" name="price" value="<?=$total_price?>">    
                        <?=$total_price?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="product-grid">
        <div class="txt-heading">Email
        <input type="submit" id="btnSubmit" name="submit" value="ยืนยัน">  
        </div>
            <div class="product">
                Name: <input type="text" name="name" class="name"><br>
                E-mail: <input type="text" name="email" class="name"><br>
                <div class="form-check name">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked>
                <label class="form-check-label" for="exampleRadios1">
                เงินสด
                </label>
                </div>
                <div class="form-check name">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2">
                <label class="form-check-label" for="exampleRadios2">
                เครดิต 
                </label>
                </div>
                <div class="form-check name">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="3">
                <label class="form-check-label" for="exampleRadios3">
                เงินโอน 
                </label>
                </div>
                
            </div>
            <div class="product">
                ค่าส่ง: <input type="text" name="carry" class="name"><br>
                บริษัทขนส่ง: <input type="text" name="shipping" class="name"><br>
                <div class="form-check name">         
                </div> 
            </div>
              
    </div>
    </form>
</body>
</html>