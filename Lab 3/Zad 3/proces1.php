<?php
include "lib/xmlrpc.inc";
include "lib/xmlrpcs.inc";

$s = new xmlrpc_client('/RPC2','127.0.0.1', 8080);
    $a = readline();
    $message = new xmlrpcmsg('konwertuj', array(new xmlrpcval($a, 'int')));
    $result = $s->send($message);

?>
