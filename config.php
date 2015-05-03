<?php 
	/*
		Conexión con la BD.
	*/
	class Conectar{

		// Parametros de conexión.
		$DBHOST = "localhost";
		$DBPORT = "5432";
		$DBNAME = "tutorial_mvc";
		$DBUSER = "postgres";
		$DBPASS = "123456";
		
		$cnxString="host=$DBHOST port=$DBPORT dbname=$DBNAME user=$DBUSER password=$DBPASS";

		public function con(){

			$con = pg_connect($cnxString) 
			OR die pg_last_error();			
			return $con;
		}



	}

 ?>