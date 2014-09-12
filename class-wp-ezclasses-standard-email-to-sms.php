<?php

if ( ! class_exists('Class_WP_ezClasses_Standard_Email_To_SMS') ){
  class Class_WP_ezClasses_Standard_Email_To_SMS{
  
    function __construct(){
  
      $url = dirname(__FILE__) . '/xml/standard-email-to-sms.xml';
	
	  $xml_carriers = simplexml_load_file($url);
	
	  // xpath trial 1
	  $result = $xml_carriers->xpath("international/country[@abbr2='ca' and @abbr3='can']");
	  var_dump( $result );
	
	  //xpath trial 2
	  $result = $xml_carriers->xpath("international/country/carriers/carrier[@option='acs_wireless_us' and @active=true]");
	  var_dump( $result );
 
    }

  }
}

?>