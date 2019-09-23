<?php
/*$to = 'jaetech@yahoo.com';
$subject =stripslashes($_POST['subject']);
$body = stripslashes($_POST['message']);
$fn = stripslashes($_POST['fullname']);
$email = stripslashes($_POST['email']);
$header = "From: $fn <$email>";

mail($to, $subject, $body, $header);

header("location:contact.php");*/
$fn = stripslashes($_POST['fullname']);
$email = stripslashes($_POST['email']);
$msg = stripslashes($_POST['message']);

if(!empty($fn) && !empty($email) && !empty($msg)){
    if(strlen($fn)>25 || strlen($email)>50 || strlen($msg)>1000){
        echo '<script language="javascript" type="text/javascript"> alert("Sorry, maximum length for some field has been exceeded.");</script>';
        echo '<script language="javascript" type="text/javascript"> window.location="contact.php";</script>';
        
        exit;
    }
    else{
        $to = '';
        $subject = 'Contact Form Submitted';
        $body = $fn."\n".$msg;
        $headers = 'From: '.$email;

        if(@mail($to, $subject, $body, $headers)){
            echo '<script language="javascript" type="text/javascript"> alert("Thanks for contacting us. We\'ll be in touch soon.");</script>';
            echo '<script language="javascript" type="text/javascript"> window.location="contact.php";</script>';
            
            exit;
        }
        else{
            echo '<script language="javascript" type="text/javascript"> alert("An error occurred. Please try again later.");</script>';
            echo '<script language="javascript" type="text/javascript"> window.location="contact.php";</script>';
            
            exit;
        }
    }
}
else{
    echo '<script language="javascript" type="text/javascript"> alert("fill in all fields");</script>';
    echo '<script language="javascript" type="text/javascript"> window.location="contact.php";</script>';
    
    exit;
}


?>