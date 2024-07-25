<?php
include "conn.php";

if(isset($_POST['submit'])){
    $text=$_POST['text'];
    $pass=$_POST['pass'];

    $ins="insert into data(text,pass)values('$text','$pass')";
    if(mysqli_query($conn,$ins)){
        echo "success ";
    }else{
        echo "wrong ";
    }
}

?> 