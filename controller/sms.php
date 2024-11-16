<?php



// Function to send an SMS
function sendSms($number, $message) {
    $senderName = 'TaalRHUSys';
    $api_key = 'fb04b87a696007ca315a4063fe805114';
    $api_url = 'https://api.semaphore.co/api/v4/messages';

    // Initialize cURL session
    $ch = curl_init();

    // Configure cURL options
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'apikey' => $api_key,
        'number' => $number,
        'message' => $message,
        'sendername' => $senderName
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the cURL request and get the response
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        $error_message = curl_error($ch);
        curl_close($ch);
        return "cURL Error: " . $error_message;
    }

    // Close the cURL session
    curl_close($ch);

    // Decode the response
    $responseData = json_decode($response, true);

    // Check if the message was queued successfully
    if ($responseData && isset($responseData['status']) && $responseData['status'] === 'queued') {
        return "SMS sent successfully!";
    } else {
        return "Failed to send SMS. Response: " . $response;
    }
}


// Usage Example
// $number = "639XXXXXXXXX";  // Recipient's phone number, include country code
// $message = "Hello! This is a test message from Semaphore using PHP.";

// echo sendSms($number, $message);

?>