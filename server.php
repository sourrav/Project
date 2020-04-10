<?php
$servername = "localhost";
$username = "root";
$db_name = 'sourav';
$table_name = "users";

// connect to server
$conn = new mysqli($servername, $username, '', $db_name) or die('Connection failed: %s\n' . $conn->connect_error);


$createTable = "CREATE TABLE IF NOT EXISTS " . $table_name . "(
    id INT NOT NULL,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL)";

$conn->query($createTable) or die("table cannot created: %s \n" . $conn->error);
$conn->query('DELETE FROM ' . $table_name);

$conn->query('INSERT INTO ' . $table_name . ' VALUES (1,"aman","sharma","a@gmail.com")');
$conn->query('INSERT INTO ' . $table_name . ' VALUES (2,"bharath","sharma","b@gmail.com")');
$conn->query('INSERT INTO ' . $table_name . ' VALUES (3,"nitin","joshi","n@gmail.com")');

