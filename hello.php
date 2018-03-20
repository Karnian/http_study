<html>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: 김형호
 * Date: 2018-03-12
 * Time: 오후 6:26
 */

echo "hello world";
$conn = mysqli_connect("localhost", "khh9201", "1111!!!!");
mysqli_query($conn,'SET NAMES utf8');
if (!$conn) {
    echo "Unable to connect to DB: " . mysqli_error($conn);
    exit;
}
if (!mysqli_select_db($conn,"khh9201")) {
    echo "Unable to select mydbname: " . mysqli_error($conn);
    exit;
}

$sql = "SELECT * 
        FROM  user_info
    LIMIT 3";

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysqli_error($conn);
    exit;
}

if (mysqli_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}

echo "<table>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['Username']}</td><td>{$row['Email']}</td></tr>";
}
echo "</table>";
mysqli_free_result($result);
?>

</body>
</html>