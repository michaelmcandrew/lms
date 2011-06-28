<?php



/*
 
 */
function contribution_create_example(){
$params = array( 
  'contact_id' => 1,
  'receive_date' => '20110602',
  'total_amount' => '100',
  'contribution_type_id' => 11,
  'payment_instrument_id' => 1,
  'non_deductible_amount' => '10',
  'fee_amount' => '50',
  'net_amount' => '90',
  'trxn_id' => 12345,
  'invoice_id' => 67890,
  'source' => 'SSF',
  'contribution_status_id' => 1,
  'version' => 3,
);

  require_once 'api/api.php';
  $result = civicrm_api( 'contribution','create',$params );

  return $result;
}

/*
 * Function returns array of result expected from previous function
 */
function contribution_create_expectedresult(){

  $expectedResult = array( 
  'is_error' => 1,
  'error_message' => 'Invalid Contribution Type Id',
);

  return $expectedResult  ;
}




/*
* This example has been generated from the API test suite. The test that created it is called
* contribution_create 
* You can see the outcome of the API tests at 
* http://tests.dev.civicrm.org/trunk/results-api_v3
* and review the wiki at
* http://wiki.civicrm.org/confluence/display/CRMDOC40/CiviCRM+Public+APIs
* Read more about testing here
* http://wiki.civicrm.org/confluence/display/CRM/Testing
*/