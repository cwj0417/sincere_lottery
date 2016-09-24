<?php
require('Sincere.php');

$sincere = new Sincere();

for($i = 0 ; $i < 60 ; $i ++ ) {
	$sincere->draw();
	sleep(5);
}