<?php
try {
  // Returns a `FacebookFacebookResponse` object
  $response = $fb->post(
    '/965902793468501/subscriptions',
    array (
      'object' => 'page',
      'fields' => 'leadgen',
      'verify_token' => 'abc123',
      'callback_url' => 'https://tx-webhook.herokuapp.com/webhook.php'
    ),
    '{access-token}'
  );
} catch(FacebookExceptionsFacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(FacebookExceptionsFacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$graphNode = $response->getGraphNode();

?>
