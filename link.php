<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'db_todos';

$link = mysqli_connect($host, $user, $pass, $db) or die('Koneksi Gagal');