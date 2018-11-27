<?php
error_reporting(E_ALL);
$conn = pg_connect(getenv("DATABASE_URL"));
if($conn) {echo "Connected";} else {echo "Not connected";}
$query = 'CREATE TABLE users (
    id          SERIAL PRIMARY KEY,
    name        varchar(80) NOT NULL,
    surname     varchar(80) NOT NULL,
    email       varchar(80) NOT NULL);';
$result = pg_query($conn,$query);
if(!$result){
    echo "Foszek error";
    echo pg_result_error($result);
}
?>
