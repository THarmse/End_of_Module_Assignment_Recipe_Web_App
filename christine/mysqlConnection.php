<?php
$connection = mysqli_connect("127.0.0.1", "root", "testtest", "recipe_app_database");
if(!$connection)
    die("Connection failed: " . mysqli_connect_error());


$query = "SELECT * FROM users";
$stmt = mysqli_query($connection, $query);
while($row = mysqli_fetch_array($stmt)){
    echo $row['Username'] . "<br>";
}

?>
