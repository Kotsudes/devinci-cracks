<?php

class Connexion
{
	// attributs
	static private $hostname = 'localhost';
	static private $database = 'cracks';
	static private $login = 'root';
	static private $password = '';

	// attribut de la classe Connexion paramètres d'encodage
	static private $tabUTF8 = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

	// attribut de la classe Connexion qui recevra l'instance PDO
	static private $pdo;

	// getter de pdo
	static public function pdo()
	{
		return self::$pdo;
	}

	// fonction de connexion
	static public function connect()
	{
		$h = self::$hostname;
		$d = self::$database;
		$l = self::$login;
		$p = self::$password;
		$t = self::$tabUTF8;
		try {
			self::$pdo = new PDO("mysql:host=$h;dbname=$d", $l, $p, $t);
			self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo "Erreur de connexion !";
		}
	}

}
?>