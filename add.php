<?php
$conn = pg_connect(getenv("DATABASE_URL"));
if($conn) {echo "Connected";} else {echo "Not connected";}
$query = "INSERT INTO users (name, surname, email) VALUES ('pan', 'niefoszek', 'pan@niefoszek.pl')";
$result = pg_query($conn,$query);
if(!$result){
    echo "Foszek error ";
    echo pg_result_error($result);
}
?>
