<?php  
	

function check_guest_age ($shnuk) {
	if($shnuk['age'] > 21) {
		echo 'You are '. $shnuk['age'] . ', please wellcome to our club ';
	} else {
		echo 'You are ' . $shnuk['age'] . '  you still need to waiit for ' . (21-$shnuk['age'])  . ' years in order to enter our club, see you in ' . (21-$shnuk['age']) . ' long years boy lol';
	};
};



