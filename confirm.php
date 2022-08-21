<?php
$encrypted_pass = md5($password);

if(isset($_POST['button'])){
    if($fnameErr == ""&&$lnameErr == ""&&$addressErr =="" &&$zipErr==""&&$cityErr==""&&$stateErr ==""&&$genderErr==""&&$occupationErr==""&&$ageErr==""&&$phoneErr==""&&$statusErr==""&&$relationshipErr==""&&$incomeErr==""&&$motherErr==""&&$reasonErr==""&&$moneyErr==""&&$describeErr==""&&$uniqueErr==""&&$emailErr==""&&$passwordErr==""&&$password2Err ==""){
       
       $sql = "INSERT INTO users (fname, lname, address, zip, city, state, gender, occupation, age, phone, citizenship, relationship, income, mothers_name, application_reason, amount, money_use, unique_reason, email, recieve_mails, password)
        VALUES ('$fname', '$lname', '$address', '$zip', '$city', '$state', '$gender', '$occupation', '$age', '$phone', '$status', '$relationship', '$income', '$mother','$reason', '$money', '$describe', '$unique', '$email', $notify, '$encrypted_pass')";

if (mysqli_query($conn, $sql)) {
    echo "<span class='success'>New record created successfully</span>";
    // header("location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    }
    else{
        echo "<span class='errors'>error, please fill in the fields correctly</span>";
    }
 
}
?>