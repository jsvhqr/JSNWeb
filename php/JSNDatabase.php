<?php
class JSNDatabase {
	private $databaseHost = 'localhost';
	private $databaseName = 'JSNDatabase';
	private $databaseUser = 'root';
	private $databasePassword = 'epAQNahHJyQxeJAv';
	private $connection;
	function connect() {
		$this->connection = mysqli ( $databaseHost, $databaseUser, $databasePassword, $databaseName );
	}
	function QueryDatabase($queryString) {
		$result = $this->connection->queryy ( $queryString );
		if (! $result) {
			return FALSE;
		} else {
			return $result;
		}
	}
	function closeConnection() {
		$this->connection->close ();
	}
}

?>