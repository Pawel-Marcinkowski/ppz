<?php
error_reporting(E_ALL);

echo "UDP Connection\n";

$port = $argv[1];
$addr = $argv[2];
$socket = socket_create(AF_INET, SOCK_DGRAM, 0);

if ($socket === false) {
    echo "Nie udało sie: " . socket_strerror(socket_last_error()) . "\n"; } else { echo "OK.\n";
}

while(true){
	$text = fgets(STDIN);
	
	if( ! socket_sendto($socket, $text, strlen($text), 0, $addr, $port)){
		$error = socket_last_error();
		$errormsg = socket_strerror($error);
		die("Nie można przesłać: [$error] $errormsg \n");
	}
}

?>
