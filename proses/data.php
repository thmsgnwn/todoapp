<?php

include_once('../link.php');

$title         = $_POST['title'];
$add_data      = "INSERT INTO todos(title) VALUES ('$title')";
$query_data    = mysqli_query($link, $add_data);

if ($query_data) {
    header('Location: ../index.php');
}