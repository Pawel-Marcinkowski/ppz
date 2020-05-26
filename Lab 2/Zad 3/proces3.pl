#!/usr/bin/perl -w
use IO::Socket;
use Net::hostent;

$PORT = 8000;

$server = IO::Socket::INET->new( Proto  => 'tcp',
								 LocalPort => $PORT,
								 Listen => SOMAXCONN,
								 Reuse => 1);
								 


 while ($client = $server->accept()) {
	$client->autoflush(1);
	$hostinfo = gethostbyaddr($client->peeraddr);
	
	while (defined ( $text = <$client>)) {
     next unless print "[$$] $text ";  
     
   } continue {
      print $client "";
   }
   
   close $client;
   close $fh;
 }


