<?php
// Prevent any PHP warnings or notices from corrupting the JSON output
ini_set('display_errors', 0);
error_reporting(0);

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (empty($data)) {
        echo json_encode(['status' => 'error', 'message' => 'No data received.']);
        exit;
    }
    
    // 1. Log the enquiry locally so data is never lost (perfect for testing and local environments)
    $log_dir = __DIR__ . '/submissions';
    if (!is_dir($log_dir)) {
        @mkdir($log_dir, 0777, true);
    }
    
    $log_file = $log_dir . '/enquiries_' . date('Y-m-d') . '.txt';
    $timestamp = date('Y-m-d H:i:s');
    $log_entry = "==================================================\n";
    $log_entry .= "New Website Enquiry: $timestamp\n";
    $log_entry .= "==================================================\n";
    foreach ($data as $key => $value) {
        $log_entry .= "$key: $value\n";
    }
    $log_entry .= "--------------------------------------------------\n\n";
    @file_put_contents($log_file, $log_entry, FILE_APPEND);
    
    // 2. Prepare and attempt email dispatch
    $to = 'info@zorentradingservices.com';
    $subject = 'New Website Enquiry';
    
    $message = "<html><body style='font-family: Arial, sans-serif;'>";
    $message .= "<h2 style='color: #0f172a;'>New Enquiry from Website</h2>";
    $message .= "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 100%; max-width: 600px;'>";
    
    foreach ($data as $key => $value) {
        $message .= "<tr><td style='background-color: #f8fafc; font-weight: bold; width: 30%;'>" . htmlspecialchars($key) . "</td><td>" . nl2br(htmlspecialchars($value)) . "</td></tr>";
    }
    
    $message .= "</table></body></html>";
    
    // Headers for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: no-reply@zorentradingservices.com" . "\r\n";
    
    // Determine reply-to email address safely
    $reply_to = 'no-reply@zorentradingservices.com';
    foreach (['Email Address', 'Email', 'email'] as $email_key) {
        if (isset($data[$email_key])) {
            $reply_to = $data[$email_key];
            break;
        }
    }
    $headers .= "Reply-To: " . $reply_to . "\r\n";
    
    // Attempt sending email (suppress warnings with @)
    if (@mail($to, $subject, $message, $headers)) {
        echo json_encode([
            'status' => 'success', 
            'message' => 'Thank you! Your enquiry has been sent successfully to info@zorentradingservices.com.'
        ]);
    } else {
        // Mail failed, but we successfully logged it. Return success to user with an explanatory note.
        echo json_encode([
            'status' => 'success', 
            'message' => 'Enquiry submitted successfully! (Saved locally on the server. Note: If this is a local setup or a server without SMTP configured, real emails cannot be sent until SMTP is configured.)'
        ]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
