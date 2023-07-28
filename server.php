<?php

$host = "localhost";
$port = 55555;

set_time_limit(0);

$sock = socket_create(AF_INET, SOCK_STREAM, 0);
$bind = socket_bind($sock, $host, $port);
$listen = socket_listen($sock, 3);
echo "listening to port {$port} \n\n";



do{
    $accept = socket_accept($sock);

    $msg = socket_read($accept, 1024);
    $msg = trim($msg);
    echo "Client : ".$msg."\n";

    echo "Reply : ";
    $reply = rtrim(fgets(STDIN));
    socket_write($accept, $reply, strlen($reply));

}while(true);

socket_close($accept, $sock);

?>