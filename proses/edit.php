<?php

include_once('../link.php');

$id          = $_POST['id'];
$title       = $_POST['title'];
$update_data = "UPDATE todos SET title = '$title' WHERE id='$id'";
$query       = mysqli_query($link, $update_data);

if ($query) {
    header('Location: ../index.php');
}