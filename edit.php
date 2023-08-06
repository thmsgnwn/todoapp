<?php

include_once('link.php');

$id    = $_GET['id'];
$get_q = "SELECT * FROM todos WHERE id='$id'";

$query = mysqli_query($link, $get_q);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TO DO LIST</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style type="text/css">
      body {
        font-family: Arial, Helvetica, sans-serif;
      }
    </style>
  </head>
  <body>
    <h1 class="text-center my-3 py-3">
      Update To-Do-List
    </h1>

    <div class="w-50 m-auto col-5">
      <form method="POST" action="proses/edit.php?id=<?= $id; ?>" autocomplete="off">
        <label for="title">Teks</label><br />
        <input
          type="text"
          name="title"
          id="title"
          required
          placeholder="Tambahkan data tugas disini"
          value="<?= $row['title'] ?>"
        />
        <br>
        <input type="hidden" value="<?= $row['id'] ?>" name="id">

        <br />
        <input type="submit" class="btn btn-success" value="Simpan" />
      </form>
    </div>

    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
    <script src="js/script.js"></script>
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
  </body>
</html>
