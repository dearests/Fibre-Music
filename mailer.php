<?php
    //get the form fields, removes html tags and whitespace
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r", "\n")), array(" ", " "), $name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    //check data
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://www.fibreentertainment/contact.php?success=-1#form");
        exit;
    }

    //set the recipient email address. Update this to YOUR disired email address
    $recipient = "info@fibreentertainment.com";
    
    $subject = "New contact from $name";

    //Build the email content

    $email_content = "Name: $name\n";
    
    $email_content .= "Email: $email\n\n";
    
    $email_content .= "Message:\n$message\n";

    //builder the email hearders.

    $email_headers = "From: $name <$email>";

    //send the email

    mail($recipient, $subject, $email_content, $email_headers);

    header("Location: http://fibreentertainment/contact.php?success=1#form");

?>