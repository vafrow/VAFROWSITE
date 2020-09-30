<?php
if (isset($_POST['submit'])) {
    //creat database coonection
    include 'config.php';
    
    $email = mysqli_real_escape_string($con, $_POST['email'])

    //sql syntax
    $sql = "INSERT INTO Email (email) VALUES ('$email')";

    if (!$result){
        die('could not post data'. mysqli_error());
    }else{
        header('Location:index.html? Thank You For Subscribe us');
        exit();
    }
}
?>