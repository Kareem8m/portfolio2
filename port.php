<?php
$serverName = "localhost";
$userName = "rootone";
$password = "kareem";
$dbName = "Clients";
// connection
$conn = new mysqli($serverName, $userName, $password, $dbName);
//check connection
if ($conn->connect_error) {
    echo "failed connection";
} else {
    echo "successful connection" . "<br>";
}
//excute sql 
$Name = $_POST["name"];
$Email = $_POST["email"];
$Message = $_POST["message"];
$Subject = $_POST["subject"];

$sql = "INSERT INTO messa (fname , email , m-essage , s-ubject ) 
    VALUES('$Name' , '$Email' , '$Message' , '$Subject')";


if ($conn->query($sql) === true) {
    echo "Record Inserted successfully";
} else {
    echo "Record is not Inserted successfully";
}
$conn->close();
?>