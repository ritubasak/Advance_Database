<?php

function connect()
{
    $conn = oci_connect("RJ","rj1234","DESKTOP-FN22KB0/XE");
	if(!$conn){
		$e = oci_error();
		trigger_error(htmlentities($e['message'],ENT_QUOTES), E_USER_ERROR);
	}
	return $conn;
}



?>