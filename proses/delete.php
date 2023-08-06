<?php

include_once('../link.php');
$id          = $_GET['id'];
$delete_data = "DELETE FROM todos WHERE id='$id'";
$query       = mysqli_query($link, $delete_data);

if ($query) {
    header('Location: ../index.php');
}