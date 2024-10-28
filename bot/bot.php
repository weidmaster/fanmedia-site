<?php
 
// Prevent PHP from stopping the script after 30 sec
set_time_limit(0);

// Opening the socket to the Rizon network
$socket = fsockopen("irc.rizon.net", 6667);

// Send auth info
fputs($socket,"USER CMbot combined-minds.net CM :CM bot\n");
fputs($socket,"NICK CM-bot\n");
 
// Join channel
fputs($socket,"JOIN #cm-bot-test\n");

// Force an endless while
while(1) {
 
	// Continue the rest of the script here
	while($data = fgets($socket, 128)) {
 
		echo nl2br($data);
		flush();
		
		// Separate all data
		$ex = explode(' ', $data);
		
		
		// Send PONG back to the server
		if($ex[0] == "PING"){
			fputs($socket, "PONG ".$ex[1]."\n");
		}
		
		// Say something in the channel
		$command = str_replace(array(chr(10), chr(13)), '', $ex[3]);
		if ($command == ":!sayit") {
			fputs($socket, "PRIVMSG ".$ex[2]." :Combined-Minds.net irc bot tutorial!\n");
		}


 
	}


 
}

 
 
?>
