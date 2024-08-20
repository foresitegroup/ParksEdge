<?php
include_once "inc/dbconfig.php";

if ($_POST['email'] != "") {
  if ($_POST['username'] == "") {
    $data = array(
      'email'  => $_POST['email'],
      'status' => 'subscribed'
    );
    
    function syncMailchimp($data) {
      global $apiKey, $listId;

      $memberId = md5(strtolower($data['email']));
      $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
      $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

      $json = json_encode(array(
        'email_address' => $data['email'],
        'status'        => $data['status']
      ));

      $ch = curl_init($url);

      curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

      $result = curl_exec($ch);
      $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      curl_close($ch);

      return $httpCode;
    }

    syncMailchimp($data);

    $mcfeedback = "Thank you for signing up for our newsletter!";
  } // Honeypot
} else {
  $mcfeedback = "Some required information is missing! Please make sure all fields are filled.";
} // Required fields

echo $mcfeedback;
?>