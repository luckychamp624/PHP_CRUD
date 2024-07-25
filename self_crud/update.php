<?php
include "conn.php";

if(isset($_POST['update'])){
    $text = $_POST['text'];
    $pass = $_POST['pass'];

    $up = "update data set pass = '$pass' where text = '$text'";

    if(mysqli_query($conn,$up)){
        echo "  updated";
    }else{
        echo " not updated";
    }
}

?>