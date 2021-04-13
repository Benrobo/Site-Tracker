<?php 
require("db.php");


$count = 0;
if(isset($_POST['count'])){
    $query = mysqli_query($conn, "INSERT INTO views(count) VALUES('0')");
    if($query){
        $sql = mysqli_query($conn, "SELECT * FROM views");
        $data = mysqli_fetch_assoc($sql);
    
        $newcount = $data['count'];
    
        if(mysqli_num_rows($sql) > 0){
            $newcount+=1;
            $sql = mysqli_query( $conn, "UPDATE views SET count='$newcount'");
    
            if($sql){
                echo "Success";
            }
        }
    }else{
        echo "Something went wrong";
        die;
    }
    // getCount();
}else{
    return false;
}

// function getCount($count = 0){
//     echo ++$count;
//     die;
//     if($count < 90){
//         $sql = mysqli_query( $conn, "INSERT INTO views(count) VALUES('$count++')");

//         if($sql){
//             echo "success";
//         }
//     }
// }

?>