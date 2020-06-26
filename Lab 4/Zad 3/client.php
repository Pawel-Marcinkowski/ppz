#!/usr/bin/php

<?php
	#===================================================================
	$port 	= 8000;
	$host 	= '127.0.0.1';
	$wsdl 	= 'http://' . $host . ':' . $port . '?wsdl';
	#-------------------------------------------------------------------
	$soap = new SoapClient( $wsdl );
	$res  = $soap->__soapCall('say_hello', array('Dave'));

	var_dump($res);
	
	print_r( $res );
	#===================================================================
?>
