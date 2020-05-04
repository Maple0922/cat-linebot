<?php
function send_to_line($message){

  $accessToken = 'sYPifI2z1J0HF76YZz+4XIJz8f7ZSFIxFpN2GxqQC0UuH1eifvYNasBmRHDehwCRZbgWtu2Z6Pi6KPLCzbnTD1pLVyGhD/YaIUnttNaaLgPvsPV0dPQ8x49X+u5lozVNgJYTL/QqE8fvOiPAmnTc7gdB04t89/1O/w1cDnyilFU=';

  $headers = array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $accessToken
  );

  $message = array(
    'type' => 'text',
    'text' => "$message"
  );

  $body = json_encode(
    array('messages' => array($message))
  );

  $options = array(
    CURLOPT_URL => 'https://api.line.me/v2/bot/message/narrowcast',
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_POSTFIELDS => $body
  );

  $curl = curl_init();
  curl_setopt_array($curl, $options);
  curl_exec($curl);
  curl_close($curl);

}

?>
