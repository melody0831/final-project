<?php

//////////////////////////////////////////////////////////////////////////
// Edit this strings to match your info
//////////////////////////////////////////////////////////////////////////

$EmailFrom = "melody0831@gmail.com";
//$EmailTo = "janym@mx.lakeforest.edu";
$EmailTo = "janym@mx.lakeforest.cedu";
$Subject = "Email From Melody's HW Contact Form";

//////////////////////////////////////////////////////////////////////////
// DONT Edit below here unless you know what you are doing.
//////////////////////////////////////////////////////////////////////////


$name = trim(stripslashes($_POST['Name'])); 
$tel = trim(stripslashes($_POST['Tel'])); 
$email = trim(stripslashes($_POST['Email'])); 
$message = trim(stripslashes($_POST['Message'])); 

// validation - we don't wan't to accept bogus input from the user
If ( $name == '' || email_addr_is_bad($email) || $message == '' ) {
  header ("Location: contact_error.php"); 
  exit;
}

// prepare email body text
// This email is just for you, so it doesn't need to be fancy
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success) {
  header ("Location: contact_thanks.php");
}
else {
  header ("Location: contact_error.php"); 
}
exit;


function email_addr_is_bad($addr) {
    if (preg_match('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/',$addr)) {
      return false;
    }
    return true;
}

?>