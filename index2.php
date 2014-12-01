<?php

// include classes
include("user.php");

mysql_connect('localhost', 'root', 'notroot');
mysql_select_db('test');

$user = new User();
echo "User known as: "  $user->getDisplayName(1) . "\n";

$friends = $user->getFriends(1);
echo "Friends with: " . implode(', ', $friends) . "\n";



?>