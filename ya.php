<?php
$conn = mysqli_connect("localhost", "root", "", "mary");

if (!$conn) {
    die("liwata");
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM yaun WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo("Success");
    exit();
} else {
    echo "login failed :((";
}

mysqli_close($conn);
?>
