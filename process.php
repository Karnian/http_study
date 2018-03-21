<?php
$conn = mysqli_connect('localhost', 'khh9201', '1111!!!!');
mysqli_select_db($conn, 'khh9201');
switch($_GET['mode']){
    case 'insert':
        $sql = "INSERT INTO user_info (Username, Password, Email) VALUES ('".mysqli_real_escape_string($conn, $_POST['username'])."', '".mysqli_real_escape_string($conn, $_POST['password'])."',  '".mysqli_real_escape_string($conn, $_POST['email'])."');";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        //header("Location: ajouin_main.html");
        break;
    case 'delete':
        mysqli_query($conn, 'DELETE FROM topic WHERE id = '.mysqli_real_escape_string($conn, $_POST['id']));
        header("Location: list.php");
        break;
    case 'modify':
        mysqli_query($conn, 'UPDATE topic SET title = "'.mysqli_real_escape_string($conn, $_POST['title']).'", description = "'.mysqli_real_escape_string($conn, $_POST['description']).'" WHERE id = '.mysqli_real_escape_string($conn, $_POST['id']));
        header("Location: list.php?id={$_POST['id']}");
        break;
    case 'login':
        mysqli_query($conn,'SET NAMES utf8');
        if (!$conn) {
            echo "Unable to connect to DB: " . mysqli_error($conn);
            exit;
        }
        if (!mysqli_select_db($conn,"khh9201")) {
            echo "Unable to select mydbname: " . mysqli_error($conn);
            exit;
        }

        $sql = "SELECT Username FROM  user_info WHERE Email='".$_POST['email']."' AND Password='".$_POST['password']."';";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "<script>alert('Not Possible'); location.href='./ajouin_login.php'; </script>";
            exit;
        }

        if (mysqli_num_rows($result) == 0) {
            echo "No rows found, nothing to print so am exiting";
            exit;
        }

        session_start();
        $_SESSION['isLogin'] = true;
        $_SESSION['userName'] = mysqli_fetch_assoc($result)['Username'];
        session_destroy();

        echo "<script>alert('Possible'); location.href='./ajouin_login.php'; </script>";
        echo "</table>";
        mysqli_free_result($result);
}
?>