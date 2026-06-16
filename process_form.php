<?php
// Prevent any PHP warnings or notices from corrupting the JSON output
ini_set('display_errors', 0);
error_reporting(0);

header('Content-Type: application/json');

// --- Simple Pure PHP SMTP Socket Client ---
class SimpleSMTP {
    private $host;
    private $port;
    private $username;
    private $password;

    public function __construct($host, $port, $username, $password) {
        $this->host = $host;
        $this->port = (int)$port;
        $this->username = $username;
        $this->password = $password;
    }

    public function send($to, $subject, $message, $fromName = 'Zoren Trading') {
        $timeout = 10;
        
        // Connect to server (using ssl:// for port 465)
        $socket = @stream_socket_client("ssl://{$this->host}:{$this->port}", $errno, $errstr, $timeout);
        if (!$socket) {
            throw new Exception("Connection to SMTP server failed: $errstr ($errno)");
        }

        // Helper to read multiline SMTP response
        $getResponse = function($socket) {
            $response = "";
            while ($line = fgets($socket, 515)) {
                $response .= $line;
                if (substr($line, 3, 1) == " ") {
                    break;
                }
            }
            return $response;
        };

        // Helper to verify SMTP response code
        $verify = function($response, $expectedCode) {
            $code = substr($response, 0, 3);
            if ($code != $expectedCode) {
                throw new Exception("SMTP protocol mismatch. Expected code $expectedCode, got: " . trim($response));
            }
        };

        try {
            // Read connection greeting
            $verify($getResponse($socket), "220");

            // Send EHLO
            fwrite($socket, "EHLO " . (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'localhost') . "\r\n");
            $getResponse($socket);

            // Request AUTH LOGIN
            fwrite($socket, "AUTH LOGIN\r\n");
            $verify($getResponse($socket), "334");

            // Send base64-encoded username
            fwrite($socket, base64_encode($this->username) . "\r\n");
            $verify($getResponse($socket), "334");

            // Send base64-encoded password
            fwrite($socket, base64_encode($this->password) . "\r\n");
            $verify($getResponse($socket), "235");

            // Send MAIL FROM
            fwrite($socket, "MAIL FROM:<{$this->username}>\r\n");
            $verify($getResponse($socket), "250");

            // Send RCPT TO
            fwrite($socket, "RCPT TO:<{$to}>\r\n");
            $verify($getResponse($socket), "250");

            // Send DATA command
            fwrite($socket, "DATA\r\n");
            $verify($getResponse($socket), "354");

            // Format SMTP mail payload with MIME headers
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: =?UTF-8?B?" . base64_encode($fromName) . "?= <{$this->username}>\r\n";
            $headers .= "To: <{$to}>\r\n";
            $headers .= "Subject: =?UTF-8?B?" . base64_encode($subject) . "?=\r\n";
            $headers .= "Date: " . date('r') . "\r\n";
            $headers .= "Message-ID: <" . time() . "-" . uniqid() . "@" . (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'localhost') . ">\r\n";
            $headers .= "\r\n"; // Headers separator

            // Send data payload terminated by dot
            fwrite($socket, $headers . $message . "\r\n.\r\n");
            $verify($getResponse($socket), "250");

            // QUIT
            fwrite($socket, "QUIT\r\n");
            fclose($socket);
            return true;
        } catch (Exception $e) {
            fclose($socket);
            throw $e;
        }
    }
}

// --- Form Processing Logic ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (empty($data)) {
        echo json_encode(['status' => 'error', 'message' => 'No data received.']);
        exit;
    }
    
    // 1. Log the submission locally so data is never lost
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
    
    // 2. Prepare Email Body
    $to = 'info@zorentradingservices.com';
    $subject = 'New Website Enquiry';
    
    $message = "<html><body style='font-family: Arial, sans-serif;'>";
    $message .= "<h2 style='color: #0f172a;'>New Enquiry from Website</h2>";
    $message .= "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 100%; max-width: 600px;'>";
    
    foreach ($data as $key => $value) {
        $message .= "<tr><td style='background-color: #f8fafc; font-weight: bold; width: 30%;'>" . htmlspecialchars($key) . "</td><td>" . nl2br(htmlspecialchars($value)) . "</td></tr>";
    }
    $message .= "</table></body></html>";
    
    // Determine user reply-to email address safely
    $reply_to = 'no-reply@zorentradingservices.com';
    foreach (['Email Address', 'Email', 'email'] as $email_key) {
        if (isset($data[$email_key])) {
            $reply_to = $data[$email_key];
            break;
        }
    }

    // 3. Check and load SMTP configuration
    $smtp_configured = false;
    $smtp_config_file = __DIR__ . '/smtp_config.php';
    
    if (file_exists($smtp_config_file)) {
        $config = include($smtp_config_file);
        if (
            is_array($config) && 
            !empty($config['password']) && 
            $config['password'] !== 'YOUR_EMAIL_PASSWORD_HERE'
        ) {
            $smtp_configured = true;
        }
    }

    // 4. Send Email
    if ($smtp_configured) {
        // Option A: Send via Authenticated SMTP (Hostinger)
        try {
            $mailer = new SimpleSMTP($config['host'], $config['port'], $config['username'], $config['password']);
            $mailer->send($to, $subject, $message, 'Zoren Trading Enquiry');
            
            echo json_encode([
                'status' => 'success', 
                'message' => 'Thank you! Your enquiry has been sent successfully via secure SMTP.'
            ]);
        } catch (Exception $e) {
            // SMTP failed - return detailed error response
            echo json_encode([
                'status' => 'error', 
                'message' => 'Secure SMTP delivery failed. Error: ' . $e->getMessage()
            ]);
        }
    } else {
        // Option B: Fallback to standard php mail() (for testing or if SMTP not yet configured)
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: no-reply@zorentradingservices.com" . "\r\n";
        $headers .= "Reply-To: " . $reply_to . "\r\n";

        if (@mail($to, $subject, $message, $headers)) {
            echo json_encode([
                'status' => 'success', 
                'message' => 'Enquiry sent successfully using fallback mailer.'
            ]);
        } else {
            // Local fallback (e.g. localhost testing)
            echo json_encode([
                'status' => 'success', 
                'message' => 'Enquiry saved locally on server! Note: Authenticated SMTP is required in smtp_config.php to receive inbox emails.'
            ]);
        }
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
