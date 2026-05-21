<?php

include 'db.php';

$item_id    = $_POST['item_id'];
$plant      = $_POST['plant'];
$location   = $_POST['location'];
$shelf      = $_POST['shelf'];
$brand      = $_POST['brand'];
$category   = $_POST['category'];
$matcode    = $_POST['matcode'];
$description= $_POST['description'];
$unit_rate  = $_POST['unit_rate'];
$total      = $_POST['total'];
$unit       = $_POST['unit'];
$amount     = $_POST['amount'];
$image_url  = $_POST['image_url'];

$sql = "

INSERT INTO inventory(

item_id,
plant,
location,
shelf,
brand,
category,
matcode,
description,
unit_rate,
total,
unit,
amount,
image_url

)

VALUES(

'$item_id',
'$plant',
'$location',
'$shelf',
'$brand',
'$category',
'$matcode',
'$description',
'$unit_rate',
'$total',
'$unit',
'$amount',
'$image_url'

)

";

if(mysqli_query($conn,$sql)){

    echo 'success';

}
else{

    echo 'error';

}

?>