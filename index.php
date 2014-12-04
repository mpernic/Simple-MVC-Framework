<?php

require('views/view.php');

$view = new View('simple.tpl');
$view->set('title', 'Naslov');
$view->set('greeting', 'Pozdrav');

echo $view->output();

?>