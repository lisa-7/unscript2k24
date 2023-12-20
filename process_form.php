<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $toEmail = "unscriptcrce.team@gmail.com"; 
    $subject = "Hackathon Sponsorship Inquiry";

    // Collect form data
    $companyName = $_POST["companyName"];
    $contactPerson = $_POST["contactPerson"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Compose email message
    $emailMessage = "Company Name: $companyName\n";
    $emailMessage .= "Contact Person: $contactPerson\n";
    $emailMessage .= "Email: $email\n";
    $emailMessage .= "Phone: $phone\n\n";
    $emailMessage .= "Message:\n$message";

    // Send email using Gmail SMTP
    mail($toEmail, $subject, $emailMessage);

    // Redirect back to the form with a success message
    header("Location: form_success.html");
    exit();
}
?>
