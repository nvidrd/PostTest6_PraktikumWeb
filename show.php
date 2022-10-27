<?php
require "config.php";
$result = mysqli_query($conn, "SELECT * FROM db_review");

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="./assets/css/sshow.css" rel="stylesheet">
   <title>Show Review</title>
</head>

<body>
   <!-- Navbar -->
   <div class="container">
      <div class="navbar">
         <h3>Skincare Kuy</h3>
         <nav>
            <ul>
               <li><a href="./index.php">Home</a></li>
               <li><a class="active" href="#">Product</a></li>
               <li><a href="./about.php">About me</a></li>

               <!-- Icon here -->
               <li><i class="bi bi-brightness-high-fill" id="toggleDark"></i></li>
            </ul>
         </nav>
      </div>

      <!-- Table display review -->
      <div class="display">
         <h1> Display Review Produk</h1>
         <h1><button><a href="create.php">Tambah</a></button></h1>
         <table class="rwd-table">
            <tbody>
               <tr>
                  <th>No.</th>
                  <th>Username</th>
                  <th>Nama Produk</th>
                  <th>Tempat Beli</th>
                  <th>Tanggal Submit</th>
                  <th>Rating</th>
                  <th style="text-align: center;">Review</th>
                  <th style="text-align: center;">Gambar</th>
                  <th style="text-align: center;">Action</th>
               </tr>
               <?php
               $i = 1;
               foreach ($result as $dbweb) :
               ?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td data-th="Username"> <?php echo $dbweb['nama']; ?> <br> </td>
                     <td data-th="Nama Produk"> <?php echo $dbweb['nama_produk']; ?> <br> </td>
                     <td data-th="Tempat Beli"><?php echo $dbweb['tempat_beli']; ?></td>
                     <td data-th="Tanggal Submit"><?=date("d-m-Y")?></td>
                     <!-- <td data-th="Tanggal Submit"><?php echo $dbweb['submit_date']; ?></td> -->
                     <td data-th="Rating"><?php echo $dbweb['rate']; ?></td>
                     <td data-th="Review"><?php echo $dbweb['konten']; ?></td>
                     <td data-th="gambar"><img src="gambar/<?php echo $dbweb['gambar'] ?>" alt="" width="100px"></td>
                     <td>
                        <button><a style="text-decoration: none;" href="update.php?id=<?php echo $dbweb['id']; ?>">Edit</a></button>
                        <button><a style="text-decoration: none;" href="delete.php?id=<?php echo $dbweb['id']; ?>">Hapus</a></button>
                     </td>
                  </tr>
               <?php 
               $i++;
               endforeach; 
               ?>
            </tbody>
         </table>

      </div>
</body>

</html>