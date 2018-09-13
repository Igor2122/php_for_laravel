<?php  
	

function check_guest_age ($shnuk) {
	if($shnuk['age'] > 21) {
		echo 'You are '. $shnuk['age'] . ', please wellcome to our club ';
	} else {
		echo 'You are ' . $shnuk['age'] . '  you still need to waiit for ' . (21-$shnuk['age'])  . ' years in order to enter our club, see you in ' . (21-$shnuk['age']) . ' long years boy lol';
	};
};


function connectToDB () {
	try {
	// $pdo = new PDO('mysql:host=127.0.0.1;dbname=wordpress', 'root', 'root');
	
 	return   $myPDO = new PDO('pgsql:host=127.0.0.1;dbname=igor', 'igor', '2122');
	
} catch (PDOException $e) {
	// die('Could not connect ');
	die($e->getMessage());
};
};