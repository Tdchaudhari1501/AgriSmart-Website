<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Agrismart/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Inter:wght@100;200;300;400;500;531;600;700;800;900&family=Lobster&family=Montserrat:wght@1,500;600;700&family=Oxygen:wght@300;400;700&family=Raleway:ital,wght@0,100;0,500;1,400;1,500&family=Roboto:ital,wght@0,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="/Agrismart/css/style.css">
    <title>Cart</title>
</head>

<body>
    <!--?php print_r($_SESSION['cart']) ?-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-8">
                <table class="table ">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                // print_r($value);
                                $sr = $key + 1;
                                echo "
                                    <tr>
                                        <td>$sr</td> 
                                        <td>$value[Item_Name] </td>
                                        <td>$value[Price]  <input class='iprice' type='hidden' value='$value[Price]'> </td>
                                        <td>
                                                    <form action='manage_store.php' method='POST'>
                                                        <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10' > </td>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'> 
                                                    </form> 
                                        </td>
                                        <td class='itotal'></td>
                                        <td>
                                            <form action='manage_store.php' method='POST'>
                                                <button name='Remove_Item' class='btn btn-sm rounded btn-outline-danger '>REMOVE</button>  
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'> 
                                            </form>
                                        </td>
                                    </tr>
                                 ";
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-3">
                    <h4>Grand Total:</h4>
                    <h5 class="text-right" id="gtotal"></h5><br>
                    <!-- form jo item hoy toj view thy -->
                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    ?>
                        <form action="purchase.php" method="post">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Phone number</label>
                                <input type="number" name="mo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <label for="pay_mod">Select Payment Mode:</label>
                            <div class="form-group">
                                 <select name="pay_Mod" id="pay_Mod">
                                    <option value="UPI">UPI</option>
                                    <option value="Cash On Delivery">Cash On Delivery</option>
                                    <option value="Offer Coupon">Coupon code</option>
                                </select>
                            </div> <br>
                            <!-- <div class="form-check" >
                            <input class="form-check-input" type="radio" name="UPI"required><label class="form-check-label" for="upi">UPI</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="COD" required><label class="form-check-label" for="upi">Cash On Delivery</label>
                        </div><br> -->
                            <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');
    var gt = 0;

    function subTotal() {
        gt = 0;
        for (i = 0; i < iprice.length; i++) {
            itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
            gt += (iprice[i].value) * (iquantity[i].value);
        }
        gtotal.innerText = gt;
    }
    subTotal();
</script>

</html>