<?php 
include "conn.php";

if(isset($_POST['delete'])){
    $text = $_POST['text'];

    // $text = mysqli_real_escape_string($conn, $text);
    

    $del = "delete from data where text = '$text'";



    if(mysqli_query($conn,$del)){
        echo "deleted";
    }else{
        echo "    bhkk bhadwe";
    }
}

?>
