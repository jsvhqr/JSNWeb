<?php
class DatabaseInteraction {
	private $database;
	private $salt = 'PkR9LH8cFpojicVbAoouS1xO3_Mg7a-MrToaHpZLQAuUCu0qzFq5%7ofrK';
	function __construct() {
		$this->database = new JSNDatabase ();
		$this->database->connect ();
	}
	function registerUser($username, $password, $email) {
		if (! $this->userExists ( $username )) {
			$token = hash ( 'ripemd128', $password . $this->salt );
			
			$this->database->QueryDatabase ( "Insert into Users Values('$username','$token','$email')" );
		} else {
			return FALSE;
		}
	}
	function userExists($username) {
		$result = $this->database->QueryDatabase ( "Select * From Users Where Username = '$username' " );
		if (! $result) {
			return FALSE;
		} else {
			return TRUE;
		}
	}
	function login($username, $password) {
		if ($this->userExists ( $username )) {
			
			$token = hash ( 'ripemd128', $password . $this->salt );
			
			$result = $this->database->QueryDatabase ( "Select * from Users Where Username = '$username' AND  Password = '$token'" );
			if (! $result) {
				return FALSE;
			} else {
				session_start ();
				$_SESSION ['username'] = $username;
				$_SESSION ['password'] = $password;
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
				ini_set ( 'session.gc_maxlifetime', 60 * 60 * 24 );
				return TRUE;
			}
		} else {
			return FALSE;
		}
	}
	function logout() {
		$_SESSION = array ();
		session_destroy ();
	}
}
?>