<?php
try{
$soapClientObj = new SoapClient('https://ws.loc-aid.net/webservice/RegistrationServices?wsdl',
array(
"trace" => 1,
"soap_version" => SOAP_1_2,
));

/* $res = $soapClientObj->updateGeofenceRadius(array("credentials" => array("username"=>"sudhir@infoobjects.com", "password"=>"locaid2012"),
 "geofenceKey"=> "INFHOME1","radius"=>3.0));
var_dump($res); */
$res = $soapClientObj->getPhoneStatus(array("login" => "naomi@mkinetic.com",
 "password"=> "5966nM","msisdnList"=>array("11111111111")));
var_dump($res);
}catch(SoapFault $soapexp){

    print_r($soapexp);

}catch(Exception $exp){

print_r($soapexp);

}
?>