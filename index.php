<?php
echo "Hello world<br>";
$conn = pg_connect(getenv("DATABASE_URL"));
if($conn) {echo "Connected";} else {echo "Not connected";}
$users = pg_query($conn, 'SELECT * FROM USERS');
$arr = pg_fetch_all($users);
echo "<br>Users:<br>";
foreach($arr as $item) {

    echo $item['id'] . "   ";
    echo $item['name'] . "   ";
    echo $item['surname'] . "   ";
    echo $item['email'] . "   <br>";
}
?>
