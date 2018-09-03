<?php
  
function send_LINE($msg){
 $access_token = 'EjijzkYuIC1y124gGRuPthSPUC4ds2fyh1096rqey2NVChulo62l0/GkxRI2+Vhe6uo9AkJ6kBcL8Cp3GLPrA+62np6gsF1+FMdu3lx7qu4xBrKfYzTX653N7ftUoIOP1zMZkOhjWXtlDmq/czHxAwdB04t89/1O/w1cDnyilFU='; 
  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => 'U399e4e026dd9bc3bbe04b24fc8750e47',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      echo $result . "\r\n"; 
}
?>