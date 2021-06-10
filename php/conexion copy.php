

<?php 
	function conexion(){
		$servidor="localhost";
		$usuario="root";
		$password="";
		$bd="vidanuevan_final";

		$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

		return $conexion;
	}
?>