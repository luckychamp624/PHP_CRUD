<?php

$conn = mysqli_connect("localhost","root","","selfcrud");
if($conn){
    echo " connection success!! ";
}else{
    echo " connection fail ";
}
// mysqli_close($conn);
?>