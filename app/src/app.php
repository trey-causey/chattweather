<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //echo each item in post
    $date =  $_POST['date'];
    $email = $_POST['email'];
    $description = $_POST['desc'];

    echo "<p>Date: $date</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Desc: $description</p>";

}
