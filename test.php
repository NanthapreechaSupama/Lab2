<?php
$servername = "localhost";
$username = "cpe2213";
$password = "123";
$db_name = "cpe2213";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, fname, lname, age, sex, marry FROM survey";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["sex"]=="M"){
        if($row["age"]>=15){
            echo "นาย" . $row["id"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
        }
        else{
            echo "ด.ช.".$row["fname"]. " ". $row["lname"]. "<br>";
          }
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>
