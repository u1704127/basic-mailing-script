<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<style>
body
    {
        background-color: rgba(201, 76, 76, 0.16);
    }

</style>
</head>
<body>

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
        echo "<h2>Mail sent Successfully</h2>";
        echo "<h4>From:$from</h4>";
        echo "<h4>To:$to</h4>";
        echo "<h4>CC:";
        echo json_encode($cc_array)."</h4>";

        echo "<h4>CC:";
        echo json_encode($bcc_array)."</h4>";
        echo "<h4>Subject: $subject</h4>";
        echo "<h4>Body: $body</h4>";

        
    }
    
    else {
        echo "Failed to send mail";
    }
    

}

?>

</body>
</html>