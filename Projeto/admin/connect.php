<?php

try {
	$pdo = new PDO("mysql:host=localhost;dbname=musica", "root", "123456"); 
} catch(PDOException $e) {
	die($e->getMessage());
}