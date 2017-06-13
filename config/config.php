<?php
###################################################
# Informations de connection a la base de donnée. #
###################################################
if (!session_id()) @session_start();

	$config = array(
		"db_name" => "radio-soummam",
		"db_user" => "root",
		"db_pass" => "",
		"db_host" => "localhost"
	);

	$repertory = "/radio-soummam";

?>