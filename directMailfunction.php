<?php
 
  
    // $to = "u1704127@gmail.com";
    // $from = "test@testmail.com";
    // $subject = "Demo Mail";
    // $header = "From: {$from}\r\n";
    // $body = "Hello \n how are you?_2";
    // $x = mail($to, $subject, $body, $header);
    // echo $x;


?>



<?php
 
  
    $to = "u1704127@gmail.com";
    $from = "test@testmail.com";
    $subject = "Demo Mail";
    $header = "MIME-version:1.0\r\n";
    $header.= "Content-type:html/text;charset=UFT-8\r\n";
    $header.= "From: {$from}\r\n";
    $body = "Hello \n how are you?_2";
    $body.= "<img src='https://images.squarespace-cdn.com/content/v1/596fbeb34c0dbffffba1155d/1501191120479-JCS53CEHILRQ3W8SXQPH/Galeria-Biodiversidad-canal-700x700.jpg?format=750w'>";
    $x = mail($to, $subject, $body, $header);
    echo $x;


?>