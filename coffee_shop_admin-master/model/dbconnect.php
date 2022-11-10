<?php

function connect()
{
	$conn = oci_connect("project","tiger","localhost/XE");
	if(!$conn){
		$e = oci_error();
		trigger_error(htmlentities($e['message'], ENT_QUOTES),E_USER_ERROR);
	}
	
	return $conn;
}

?>