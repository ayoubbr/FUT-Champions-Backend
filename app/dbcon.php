<?php

define("SERVERNAME", "db");
define("USERNAME", "my_user");
define("PASSWORD", "my_password");
define("DATABASE", "FUT_backend_database");

$connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE);

if (!$connection) {
    die("Connection FFailed!");
} else {
    echo '<script>
    alert("WORKED");
    </script>';
}
