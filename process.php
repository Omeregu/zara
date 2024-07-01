<?php

if($_server("request_method")==($POST)){
    $name == $_POST ["name"];
    $email == $_POST ["email"];
    $phone == $_POST ["address"];
    $message == $_POST ["message"];
    $to = "fyneprints8@gmail.com";
    $headers = "from: $email";
    if(mail($to, $subject, $message, $header)){;
        echo" Your order have been delivered successfully";
    }else{
        echo"Not Delivered, Check your Internet Connection";
    }

    
}
?>