<?php
session_start();

include_once('main.php');

class Clicks extends ClassName {
		
	var $vars_declaration;

	public function function_name() {
		include($this->connection);

		$this->query = "QUERY";
		$rs = $db->Execute($this->query);
		if ( $rs ) return true;
		else return false;
	}

	public function get_value() {
		include($this->connection);

		$this->query = "QUERY";
		$rs = $db->Execute($this->query);
		if ( $rs ) return $rs->fields['FIELD_NAME'];
		else return false;
	}
}
?>