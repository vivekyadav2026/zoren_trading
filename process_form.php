<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (empty($data)) {
        echo json_encode(['status' => 'error', 'message' => 'No data received.']);
        exit;
    }
    
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
    $headers .= "Reply-To: " . (isset($data['Email Address']) ? $data['Email Address'] : 'no-reply@zorentradingservices.com') . "\r\n";
    
    // PHP mail function
    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Your enquiry has been sent successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to send the enquiry. Your local mail server might not be configured.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
