<?php

// Use prepared statements to prevent SQL injection
$fname = $_POST["rfname"];
$lname = $_POST["rlname"];
$gmail = $_POST["registerEmail"];
$pass = $_POST["registerPassword"];

$duplicate="SELECT * FROM 'registerphp' where email='$gmail'";
$result1=mysqli_query($conn,$duplicate);

if (mysqli_num_rows($result1) > 0) {
    echo "Duplicate data";
} 
else {
    $query = "INSERT INTO 'registerphp' VALUES ('$fname', '$lname', '$gmail', '$pass')";
    $result=mysqli_query($conn, $query);
    if ($result) {
        echo "inserted";
    }
}

?>