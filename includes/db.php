<?php
$user = "root";
$pass = "";
try {
    $db = new PDO('mysql:host=localhost;dbname=ess', $user, $pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nom VARCHAR(30) NOT NULL,
prenom VARCHAR(30) NOT NULL,
fonction VARCHAR(128) NOT NULL,
structure VARCHAR(128) NOT NULL,
code_postal INTEGER(30) NOT NULL,
ville VARCHAR(128) NOT NULL,
email VARCHAR(50),
)";
$db->query($sql);