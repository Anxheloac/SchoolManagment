<?php
require_once 'db_connect.php';
if(isset($_POST['email'])&& isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_REQUEST['type'];
    $header = '';
    if ($type == 1) {
        $type = 'pedagog';
        $header = 'location:pedagog.php';
    } else {
        $type = 'student';
        $header = 'location:student.php';
    }

    $query = "SELECT * FROM " . $type . " WHERE email='" . $email . "' and password='" . $password . "'";
    echo $query;
    $result = mysqli_query($conn, $query);
 $row=mysqli_fetch_array($result);
      $id=$row[0];


    if (mysqli_num_rows($result) == 1) {

        header($header.'?id='.$id);
    } else {
        header('location:home.php?wrong='.$type);
    }
}
?>

