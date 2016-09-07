<?php
$salt = "ParksEdgeMailchimpForm";

if ($_POST['confirmationCAP'] == "") {
  if ($_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "") {
    $mcfeedback = "Thank you for signing up for our newsletter!";
  
    $data = [
      'email'  => $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])],
      'status' => 'subscribed'
    ];
    
    function syncMailchimp($data) {
      $apiKey = 'dfa660346d0fe7d3e3315ed2414181ac-us14';
      $listId = 'ebbe9285ac';

      $memberId = md5(strtolower($data['email']));
      $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
      $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

      $json = json_encode([
        'email_address' => $data['email'],
        'status'        => $data['status']
      ]);

      $ch = curl_init($url);

      curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
      curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
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

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 200 OK");
      echo $mcfeedback;
    }
  } else {
    $mcfeedback = "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 500 Internal Server Error");
      echo $mcfeedback;
    }
  }
}
?>