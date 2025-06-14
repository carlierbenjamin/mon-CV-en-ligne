<?php
  $array = array("firstname" => "", "name" => "", "email" => "", "phone" => "", "message" => "", "firstnameError" => "", "nameError" => "", "emailError" => "", "phoneError" => "", "messageError" => "", "isSuccess" => false);
  $emailTo = "Contact@carlierbenjamin.com";
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $array["firstname"] = test_input($_POST["firstname"]);
    $array["lastname"] = test_input($_POST["lastname"]);
    $array["email"] = test_input($_POST["email"]);
    $array["phone"] = test_input($_POST["phone"]);
    $array["message"] = test_input($_POST["message"]);
    $array["isSuccess"] = true; 
    $emailText = "";


    if (empty($array["firstname"])) {
        $array["firstnameError"] = "Inscrire votre prénom.";
        $array["isSuccess"] = false; 
    } else {
        $emailText .= "Firstname: {$array['firstname']}\n";
    }

    if (empty($array["lastname"])) {
        $array["lastnameError"] = "Inscrire votre nom.";
        $array["isSuccess"] = false; 
    } else {
        $emailText .= "Name: {$array['lastname']}\n";
    }

    if(!isEmail($array["email"])) {
        $array["emailError"] = "Inscrire votre mail selon le format type.";
        $array["isSuccess"] = false; 
    } else {
        $emailText .= "Email: {$array['email']}\n";
    }

    if (!isPhone($array["phone"])) {
        $array["phoneError"] = "Inscrire votre numéro de téléphone avec des chiffres et des espaces seulement.";
        $array["isSuccess"] = false; 
    } else {
        $emailText .= "Phone: {$array['phone']}\n";
    }

    if (empty($array["message"])) {
        $array["messageError"] = "Inscrire votre message.";
        $array["isSuccess"] = false; 
    } else {
        $emailText .= "Message: {$array['message']}\n";
    }
    
    if($array["isSuccess"]) {
        $headers = "From: {$array['firstname']} {$array['lastname']} <{$array['email']}>\r\nReply-To: {$array['email']}";
        mail($emailTo, "message provenant du CVben en ligne", $emailText, $headers);
    }
    
    echo json_encode($array);    
}

function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function isPhone($phone) {
    return preg_match("/^[0-9 ]*$/",$phone);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
