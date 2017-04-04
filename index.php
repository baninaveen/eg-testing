$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:a3c99c896b954975d5ccc646457f5cc5",
                  "X-Auth-Token:912bb2d482bc0d3802e1bbc9954c366d"));
$payload = Array(
    'purpose' => 'FIFA',
    'amount' => '250',
    'phone' => '9999999999',
    'buyer_name' => 'Bani Naveen',
    'redirect_url' => 'https://eg-testing-payment.herokuapp.com/',
    'send_email' => true,
    'webhook' => 'http://www.example.com/webhook/',
    'send_sms' => true,
    'email' => 'foo@example.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch);

echo $response;
