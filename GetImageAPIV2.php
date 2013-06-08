<?php

/**
 * @author Dial2Verify Labs, India
 * @copyright 2013
 * Built on Dial2Verify API V2 ( http://kb.dial2verify.in/?q=9 )
 */

   // Accept Telephone Number As An Input     
	$TelNumber=substr($_REQUEST["phone_number"],-10);

  // Replace with your Dial2Verify API Passkey generated using ( http://kb.dial2verify.in/?q=5 )
    $API_KEY='RA$WORLD_TEST';
  
  // Get API Image Response
    $json=file_get_contents("http://engine.dial2verify.in/Integ/UserLayer/GetImageAPIV2.dvf?phone_number=".$TelNumber);

  // Write a JSON Object response 
    header('Content-type: application/json');
    echo($json);



?>
