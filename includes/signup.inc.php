<?php
    include_once 'dbh.inc.php';

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $idea = $_POST['idea'];

    $sql = "INSERT INTO  data (full_name, email, telephone, comment)
            VALUES ('$fullname' , '$email' , '$telephone' , '$idea'); ";

    mysqli_query($conn,$sql);

    header("Location: ../contact.php?signup=success");

?>