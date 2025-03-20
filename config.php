<?php

$host ="localhost";
$user ="root";
$pass = ""; 
$dbname = "sistem_pendaftaran";

$conn = new mysqli ($host,$user,$pass,$dbname);

if ($conn->connect_error) {
    header("Location: error.php?msg=Sambungan%20ke%20pangkalan%20data%20gagal.");
    exit();
}
?>