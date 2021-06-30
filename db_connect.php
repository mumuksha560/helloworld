<?php
    $conn = mysqli_connect('localhost','root','','helloworld');
    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    }
?> 

