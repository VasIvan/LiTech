<?php
require "conn.php";

if(isset($_POST["sub-btn"])){

    $validator = bin2hex(random_bytes(32)); // validator in hexidecimal digits
    //Important! The variable $url must be change with the directory of your server where the file is uploaded.
    //If the variable $url = "https://geronimo.okol.org/~vasivan/php/Liana/index.php?validator=$validator#sub-form"; is not changed, then the validation link will navigate the user to my server
    //Only this part of the variable mus be changed https://geronimo.okol.org/~vasivan/php/Liana/    , the rest of the link is the validator and navigation to the sucscribe form
    $url = "https://geronimo.okol.org/~vasivan/php/Liana/index.php?validator=$validator#sub-form"; // This is the URL validator that the user will recieve on his email and he have to click it
    $email = $_POST["email"];

    if(empty($email)){ // Check if the email field is empty
        header("Location: index.php?error=empty#sub-form");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Check if the string is a valid email
        header("Location: index.php?error=notemail#sub-form");
        exit();
    }
    
    $sql = "DELETE FROM liana_valid WHERE email_valid=?;"; // Delete from the validator database if there is a existing previous validator for this email 
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)){
        echo "Prepared statement (Delete existing validator) error!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO liana_valid (email_valid, valid_valid) VALUES (?, ?);"; // Insert the new validator
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)){
        echo "Prepared statement (Inserting new validator) error!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $email, $validator);
        mysqli_stmt_execute($stmt);
    }


    mysqli_stmt_close($stmt);

    //Send Validator to the user email

    $to = $email;
    $subject = "Liana Technologies subscribtion confirmation email";
    $message = "<p>We are happy to know that you are interested in Liana technologies. </p>";
    $message .= "<p>In order to subscribe to our website you have to click the following link: <br>";
    $message .= "<a href='$url'>$url</a></p>";

    $headers = "From: Liana Technologies <hello@lianatech.com>\r\n";
    $headers .="Reply-To: hello@lianatech.com\r\n";
    $headers .="Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: index.php?emailsub=success#sub-form");


}else{
    header("Location: index.php");
}
