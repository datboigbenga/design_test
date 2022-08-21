<?php
$fnameErr= $lnameErr= $addressErr= $zipErr = $cityErr = $stateErr = $genderErr = $occupationErr = $ageErr = $phoneErr = $statusErr = $relationshipErr = $incomeErr = $motherErr = $reasonErr= $moneyErr = $describeErr = $uniqueErr = $emailErr = $passwordErr =$password2Err= "";


$fname= $lname= $address= $zip = $city = $state = $gender = $occupation = $age = $phone = $status = $relationship = $income = $mother = $reason= $money = $describe = $unique = $email = $password = $password2 = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
// first name
if (empty($_POST['template-application-first-name'])){
    $fnameErr = "Firstname is required";
}
else{
    $fname = input_data($_POST["template-application-first-name"]);  
            if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {  
                $fnameErr = "Only alphabets and white space are allowed";  
            }  
}

// last name
if (empty($_POST['template-application-last-name'])){
    $lnameErr = "Lastname is required";
}
else{
    $lname = input_data($_POST["template-application-last-name"]);  
            if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {  
                $lnameErr = "Only alphabets and white space are allowed";  
            }  
}

// address
if (empty($_POST['template-application-street-address'])){
    $addressErr = "Address is required";
}
else{
    $address= input_data($_POST["template-application-street-address"]);  
}


// Zip-code
if (empty($_POST['template-application-zip'])){
    $zipErr = "Zip code is required";
}
else{
    $zip = input_data($_POST["template-application-zip"]);  
            if (!preg_match("/^[0-9]*$/",$zip)) {  
                $zipErr = "Only numbers are allowed";  
            }  
}

#city

if (empty($_POST['template-application-city'])){
    $cityErr = "City is required";
}
else{
    $city = input_data($_POST["template-application-city"]);  
        if (!preg_match("/^[a-zA-Z ]*$/",$city)) {  
                $cityErr = "Only alphabets and white space are allowed";  
            }  
}

#state
if ($_POST['template-application-state'] == "empty"){
    $stateErr = "State is required";
}
else{
    $state = input_data($_POST["template-application-state"]);  
}

#gender
if ($_POST['template-application-gender'] == "empty"){
    $genderErr = "gender is required";
}
else{
    $gender = input_data($_POST["template-application-gender"]);  
}

#occupation
if (empty($_POST['template-application-occupation'])){
    $occupationErr = "occupation is required";
}
else{
    $occupation = input_data($_POST["template-application-occupation"]);  
        if (!preg_match("/^[a-zA-Z ]*$/",$occupation)) {  
                $occupationErr = "Only alphabets and white space are allowed";  
            }  
}

#age
if ($_POST['template-application-age'] == "empty"){
    $ageErr = "Age is required";
}
else{
    $age = input_data($_POST["template-application-age"]);  
}

#phone
if (empty($_POST['template-application-phone'])){
    $phoneErr = "Phone number is required";
}
else{
    $phone = input_data($_POST["template-application-phone"]);  
}

// citizenship status
if ($_POST['template-application-citizenship-status'] == "empty"){
    $statusErr = "Citizenship Status is required";
}
else{
    $status = input_data($_POST["template-application-citizenship-status"]);  
}

// relationship
if ($_POST['template-application-relationship-status'] == "empty"){
    $relationshipErr = "Relationship Status is required";
}
else{
    $relationship = input_data($_POST["template-application-relationship-status"]);  
}

// income
if (empty($_POST['template-application-monthly-income'])){
    $incomeErr = "Annual income is required";
}
else{
    $income = input_data($_POST["template-application-monthly-income"]);  
    if (!preg_match("/^[0-9]*$/",$income)) {  
        $incomeErr = "Only numbers are allowed";  
    }  
}

#mothers_name
if (empty($_POST['template-application-mothers-name'])){
    $motherErr = "Mother's name is required";
}
else{
    $mother = input_data($_POST["template-application-mothers-name"]);  
        if (!preg_match("/^[a-zA-Z ]*$/",$mother)) {  
                $motherErr = "Only alphabets and white space are allowed";  
            }  
}

#reason
if (empty($_POST['template-application-business'])){
    $reasonErr = "why are you applying?";
}
else{
    $reason = input_data($_POST["template-application-business"]);  
}

#money needed
if (empty($_POST['money'])){
    $moneyErr = "How much do you need?";
}
else{
    $money = input_data($_POST["money"]);  
    if (!preg_match("/^[0-9]*$/",$money)) {  
        $moneyErr = "Only numbers are allowed";  
    }  
}

#describe
if (empty($_POST['template-application-usedescription'])){
    $describeErr = "please, field is required";
}
else{
    $describe = input_data($_POST["template-application-usedescription"]);  
    if (strlen($describe) < 11) {  
        $describeErr = "Too short for a description";  
    }  
}

#unique 
if (empty($_POST['template-application-uniquedescription'])){
    $uniqueErr = "please field is required";
}
else{
    $unique = input_data($_POST["template-application-uniquedescription"]);  
    if (strlen($unique) < 11) {  
        $uniqueErr = "Too short for a unique description";  
    }  
}

// email
if (empty($_POST["template-application-email"])) {  
    $emailErr = "Email is required";  
} else {  
    $email = input_data($_POST["template-application-email"]);  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
        $emailErr = "Invalid email format";  
    }  
}  

#password
if (empty($_POST["template-application-password"])) {  
    $passwordErr = "please password is required";  
} else {  
    $password = $_POST["template-application-password"];  
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        $passwordErr = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }
}  

#password2
if (empty($_POST["template-application-password2"])) {  
    $password2Err = "please confirm your password";  
} else {  
    $password2 = $_POST["template-application-password2"];  
    if($password != $password2) {
        $password2Err = 'password do not match';
    }
} 

if($_POST['template-application-inform'] == "yes"){
    $notify = 1;
    }
    else{
        $notify = 0;
    }
}

function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
  }  
?>