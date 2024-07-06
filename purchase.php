<?php
include_once 'dbConfig.php';
session_start();
//  session_destroy();
if (!$db) {
    die("Could not connected " . mysqli_connect_error());
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['purchase'])) {
        $stmt = "insert into order_manager(Full_Name,Phone_No,Address,Pay_Mode) values('$_POST[name]','$_POST[mo]','$_POST[address]','$_POST[pay_Mod]')";
        if ($db->query($stmt) === true) {
            $Order_id = mysqli_insert_id($db);
            $stmt2 =  "insert into  user_orders(Order_id,Item_Name,Price,Quantity) values(?,?,?,?)";
            $prepstmt = mysqli_prepare($db, $stmt2);
            if ($prepstmt) {
                mysqli_stmt_bind_param($prepstmt, "isii", $Order_id, $Item_Name, $Price, $Quantity);
                foreach ($_SESSION['cart'] as $key => $values) {
                    $Item_Name = $values['Item_Name'];
                    $Price = $values['Price'];
                    $Quantity = $values['Quantity'];
                    mysqli_stmt_execute($prepstmt);
                }
                unset($_SESSION['cart']);
                echo "<script> alert('Your Order  Successfully Placed ! ');
                    window.location.href='store.php'; 
                    </script>";
            } else echo "Prepare Error " . $db->error;
        } else echo "Error " . $db->error;
    }
}