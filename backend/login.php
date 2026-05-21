<?php

include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "

SELECT * FROM admin_users

WHERE username='$username'

AND password='$password'

";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

    echo 'success';

}
else{

    echo 'failed';

}

?>