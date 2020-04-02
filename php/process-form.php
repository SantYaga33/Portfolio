<?php
if (isset($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['comment'])) {
      
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $comment = $_REQUEST['comment'];

    // Set your email address where you want to receive emails. 
    $to = '33santyaga@gmail.com';
      
    $subject = 'Contact Request From Website';
    $headers = "From: ".$name." <".$email."> \r\n";
      
    $send_email = mail($to,$subject,$comment,$headers);
      
    echo ($send_email) ? 'success' : 'error';
      
}
?>