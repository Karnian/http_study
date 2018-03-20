<?php
$conn = mysqli_connect('localhost', 'khh9201', '1111!!!!');
mysqli_select_db($conn, 'khh9201');
switch($_GET['mode']){
    case 'insert':
        $sql = "INSERT INTO user_info (Username, Password, Email) VALUES ('".mysqli_real_escape_string($conn, $_POST['Username'])."', '".mysqli_real_escape_string($conn, $_POST['Password'])."',  '".mysqli_real_escape_string($conn, $_POST['Email'])."', now())";
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
}
?>