<?php
if(isset($_POST['username']) && isset($_POST['module']) && isset($_POST['location']) && isset($_POST['telephone']) && isset($_POST['message'])){
    $username = $_POST['username'];
    $module = $_POST['module'];
    $location = $_POST['location'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];

    $stm= $dbh->prepare("INSERT INTO reservation (nom,module,location,telephone,message) VALUES(?,?,?,?,?)");
    $stm->execute(array($username,$module,$location,$telephone,$message));
    header("Location: index.html");
}
