<?php
$user = "root";
$pass = "";
try {
    $db = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


// Create database
$sql = "CREATE DATABASE myDB";
if ($db->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $db->error;
}
?>