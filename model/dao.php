<?php





function getConnection()
{
    $conn = mysqli_connect("localhost", "u1751546", "03jan98", "filmsalesservice");
    if ($conn == false) {
        echo "Error: Could not connect";

    }
}
