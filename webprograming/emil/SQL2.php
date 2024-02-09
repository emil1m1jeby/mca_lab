<?php
$conn = new mysqli("localhost", "root", "","MCA2");
// Check connection
 if ($conn->connect_error) {
// Creating a connection
 $cc = new mysqli("localhost", "root", "");
// Check connection
 if ($cc->connect_error) {
 die("Connection failed: " . $cc->connect_error);
 }
 // Creating a database named newDB
 $s = "CREATE DATABASE MCA3";
 if ($cc->query($s) === TRUE) {
 echo "Database created successfully with the name S3MCA";
 } else {
 echo "Error creating database: " . $cc->error;
 }
 }
 /*// checking connection
 $conn = new mysqli("localhost", "root", "","MCA2");
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }*/
 // sql code to create table
 $sl = "CREATE TABLE Student(
 id INT(2) PRIMARY KEY,
 Name VARCHAR(30) NOT NULL
 )";
 if ($conn->query($sl) === TRUE) {
 echo "Table Student created successfully";
 } else {
 echo "Error creating table: " . $conn->error;
 }
 $cc->close();
 ?>
