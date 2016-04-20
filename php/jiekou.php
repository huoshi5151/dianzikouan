<?
 
$soap=new SoapClient('http://171.12.5.86:83/DataInteractonWbs/webservice/wbs?wsdl'); 
 
 $parm=file_get_contents("new.xml");
 $result=$soap->payParse(array('xmlStr'=>$parm)); //数组  
print_r($result); 
 