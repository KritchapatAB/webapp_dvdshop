<?php
    require 'step1.php';
    $sql_update="UPDATE member SET firstname='$_POST[firstname]',lastname='$_POST[lastname]' ,address='$_POST[address]' ,phone='$_POST[phone]' WHERE id='$_POST[id]' ";

    $result= $conn->query($sql_update);

    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    echo "Edit Success <br>";
    header("refresh: 1; url=http://localhost/EIEI/step2.php");
}

?>