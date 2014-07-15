<?php
header('Content-type: application/json');
$CONFIG = json_decode(file_get_contents('../config.json'), true);
$MC = $CONFIG['mailchimp'];

if (!empty($_POST[$MC['nonce']])) { return; } // cheap spam check

require '../lib/mailchimp-api-0.0.1/src/Drewm/MailChimp.php';

// See: http://labs.omniti.com/labs/jsend
$result = array('status' => 'success');

$in_email = substr(filter_input(INPUT_POST, 'EMAIL', FILTER_SANITIZE_EMAIL), 0, 100);
$in_fname = substr(filter_input(INPUT_POST, 'FNAME', FILTER_SANITIZE_STRING), 0, 40);
$in_lname = substr(filter_input(INPUT_POST, 'LNAME', FILTER_SANITIZE_STRING), 0, 40);

if (empty($in_email)) {
  echo json_encode(array(
    'status' => 'error',
    'message' => 'Invalid email address.',
    'data' => array('email' => $in_email)
  ));
  return;
}//end if: check required fields


$params = array(
  // Required
  'id' => $MC['list'],
  'email' => array('email' => $in_email),

  // Optional
  'update_existing' => true,
  'replace_interests' => false,
  'merge_vars' => array(
    // Other
    'FNAME' => $in_fname ? $in_fname : '',
    'LNAME' => $in_lname ? $in_lname : '',

    // Special
    'optin_ip' => $_SERVER['REMOTE_ADDR'],
    'groupings' => array(
      array(
        'id' => $MC['group'],
        'groups' => $MC['subgroup']
      )
    )
  )
);

$MailChimp = new \Drewm\MailChimp($MC['api']);
$req = $MailChimp->call('lists/subscribe', $params);
if ('error' == $req['status']) {
  $result = array(
    'status' => 'error',
    'message' => $req['error'] . ' (Code ' . $req['code']. ')'
  );
}//end if: handled error

$result['data'] = $req;

echo json_encode($result);
