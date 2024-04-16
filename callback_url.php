<?php
 		header("Content-Type: application/json");

     $response = '{
         "ResultCode": 0, 
         "ResultDesc": "Confirmation Received Successfully"   //returns a confirmation message for successful transaction
     }';
 
     // DATA
     $mpesaResponse = file_get_contents('php://input');
 
     // log the response
     $logFile = "M_PESAConfirmationResponse.json";            // creates a json file to log in the successful transactions 
 
     // write to file
     $log = fopen($logFile, "a");
 
     fwrite($log, $mpesaResponse);
     fclose($log);
 
     echo $response;
