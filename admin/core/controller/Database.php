<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="adminSYf5dZY";$this->pass="TyDIMarLiqNW";$this->host="127.12.196.2:3306
";$this->ddbb="katanalite";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
