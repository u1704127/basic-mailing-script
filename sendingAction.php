<?php
if(isset($_POST['submit'])){
    $from = $_POST['from'];
    $to = $_POST['to'];
    $cc = $_POST['cc'];
    $header= "From: {$from}\r\n";
    $cc_array = explode(",",$cc);
    $header.="Cc: ";
    foreach($cc_array as $cc1){
        $header.= $cc1.",";
    }

    $bcc = $_POST['bcc'];
    $header.="Bcc: ";
    $bcc_array = explode(",",$bcc);
    foreach($bcc_array as $bcc1){
        $header.= $cc1.";";
    }
    
    $subject = $_POST['sub'];
    $body = $_POST['body'];

    $status = $x = mail($to, $subject, $body, $header);
    
    if($status==1){
        echo "Mail sent Successfully";
    }
    
    else {
        echo "Failed to send mail";
    }
    

}

?>