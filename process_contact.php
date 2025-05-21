<?php
require_once 'config/config.php';
require_once 'includes/session.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $marketing = isset($_POST['marketing']) ? true : false;

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format";
        header("Location: contact.php");
        exit();
    }

    // Insert form data into the database
    try {
        // Use the global PDO connection
        $pdo = $GLOBALS['pdo'];
        $stmt = $pdo->prepare("INSERT INTO Contact_us_data (name, company, email, telephone, message, marketing) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $name,
            isset($_POST['company']) ? trim($_POST['company']) : null,
            $email,
            $telephone,
            $message,
            $marketing ? 1 : 0
        ]);
    } catch (PDOException $e) {
        // Log error and show user-friendly message
        error_log('Contact form DB insert error: ' . $e->getMessage());
        $_SESSION['error'] = "Sorry, there was an error saving your message. Please try again later.";
        header("Location: contact.php");
        exit();
    }

    // Prepare email content
    $to = "asif.ahmad@netmatters-scs.com"; // Replace with your email
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "You have received a new message from your website contact form.\n\n" .
        "Here are the details:\n\n" .
        "Name: $name\n" .
        "Email: $email\n" .
        "Telephone: $telephone\n" .
        "Subject: $subject\n" .
        "Message:\n$message\n\n" .
        "Marketing Consent: " . ($marketing ? "Yes" : "No");

    // Email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        $_SESSION['success'] = "Thank you for your message. We will get back to you soon!";
    } else {
        $_SESSION['error'] = "Sorry, there was an error sending your message. Please try again later.";
    }

    // Redirect back to contact page
    header("Location: contact.php");
    exit();
} else {
    // If not a POST request, redirect to contact page
    header("Location: contact.php");
    exit();
}
?> 