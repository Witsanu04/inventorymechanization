<?php

include 'db.php';

$item_id = $_POST['item_id'];

$user_name = $_POST['user_name'];

$quantity = $_POST['quantity'];

$sql = "

INSERT INTO withdraw_logs(

item_id,
user_name,
quantity

)

VALUES(

'$item_id',
'$user_name',
'$quantity'

)

";

if(mysqli_query($conn,$sql)){

    mysqli_query($conn,

    "

    UPDATE inventory

    SET total = total - $quantity

    WHERE item_id='$item_id'

    "

    );

    echo 'success';
}
else{
    echo 'error';
}

?>