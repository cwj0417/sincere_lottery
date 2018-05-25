<?php
require('Sincere.php');

$sincere = new Sincere();

for($i = 0 ; $i < 30 ; $i ++ ) {
	$sincere->draw();
	sleep(5);
}
