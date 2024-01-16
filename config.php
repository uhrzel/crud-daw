<?php
$servername = "localhost";
$username = "root";
$password = "arzelzolina10";
$casereportdb = "casereportdb";
$loginformdb = "loginformdb";
$registrationdb = "registrationdb";

// Create connections for each database
$conn_casereport = new mysqli($servername, $username, $password, $casereportdb);
$conn_loginform = new mysqli($servername, $username, $password, $loginformdb);
$conn_registration = new mysqli($servername, $username, $password, $registrationdb);

// Check connections
if ($conn_casereport->connect_error) {
    die("Connection to casereportdb failed: " . $conn_casereport->connect_error);
}

if ($conn_loginform->connect_error) {
    die("Connection to loginformdb failed: " . $conn_loginform->connect_error);
}

if ($conn_registration->connect_error) {
    die("Connection to registrationdb failed: " . $conn_registration->connect_error);
}
