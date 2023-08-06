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
      Selamat Datang pada To-Do-List App Sederhana
    </h1>
    <h1>COba Suhu</h1>
    <h2>Master</h2>
    <h3>BANget woi</h3>

    <div class="w-50 m-auto col-5">
      <form method="POST" action="proses/data.php" autocomplete="off">
        <label for="title">Teks</label><br />
        <input
          type="text"
          name="title"
          id="title"
          required
          placeholder="Tambahkan data tugas disini"
        />
        <br />
        <input type="submit" class="btn btn-success" value="Simpan" />
      </form>
    </div>

    <br />

    <hr class="bg-dark w-30 m-auto col-7" />

    <div class="w-50 m-auto">
      <h3 class="bold">Judul sini</h3>
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Task</th>
            <th scope="col">Action</th>
          </tr>
         <?php

         include_once ('link.php');
         $get_q = "SELECT * FROM todos";
         $query = mysqli_query($link, $get_q);

         $no=1;
         while( $row = mysqli_fetch_array($query) ) {
          echo "<tr>";
          echo "<td>$no</td>";
          echo "<td>$row[title]</td>";
          echo "<td><a href='edit.php?id=$row[id]'>edit</a> | <a href='proses/delete.php?id=$row[id]'>hapus</a></td>";
          $no++;
        }
        
         ?>
        </thead>
      </table>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
    <script src="js/script.js"></script>
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
  </body>
</html>
