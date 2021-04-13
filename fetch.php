<?php 
require("db.php");


if(isset($_POST['fetch'])){
    $sql = mysqli_query($conn, "SELECT * FROM views");
    $data = mysqli_fetch_assoc($sql);
    $count = $data['count'];

    if(mysqli_num_rows($sql) > 0){
        echo $count;
    }else{
        echo "0";
    }
}else{
    return false;
}


?>