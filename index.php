<?php
  include 'connect.php';

  if(isset($_POsT['submit'])){
    $nim = htmlentities($_POST['nim']);
    $name = htmlentities($_POST['name']);
    $hp = htmlentities($_POST['hp']);
    $email = htmlentities($_POST['email']);
    $sosmed = htmlentities($_POST['sosmed']);
    $peminatan = htmlentities($_POST['peminatan']);

    $query = $connect->prepare("INSERT INTO 'tbPendaftaran'('nim','name','hp','email','sosmed','peminatan') VALUES (:nim,:name,:hp,:email,:sosmed,:peminatan)");
    $query->bindParam(":nim", $nim);
    $query->bindParam(":name", $name);
    $query->bindParam(":hp", $hp);
    $query->bindParam(":email", $email);
    $query->bindParam(":sosmed", $sosmed);
    $query->bindParam(":peminatan", $peminatan);

    $query->execute();

    header("location: index.php")
  }
?>


<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Daftar Open Class</title>
 </head>
 <body>
   <a href=""><img src="ksl.png" alt="pendaftaran" style="width:594px;height:577px;"></a>
   <h1>KSL UBL</h1>
   <form method="post">
   <div class="01">
     <div class="top">
       <a class="top01">Pendaftaran Open Class</a>
     </div>
     <div class="left">
       <li><a href="#">NIM</a></li>
       <li><a href="#">Name</a></li>
       <li><a href="#">No HP</a></li>
       <li><a href="#">Email</a></li>
       <li><a href="#">Sosmed</a></li>
       <li><a href="#">Peminatan</a></li>
     </div>
     <div class="right">
       <input type="text" name="nim" placeholder="NIM" /><br>
       <input type="text" name="name" placeholder="Name" /><br>
       <input type="text" name="hp" placeholder="No HP" /><br>
       <input type="text" name="email" placeholder="Email" /><br>
       <input type="text" name="sosmed" placeholder="Sosmed" /><br>
       <input type="submit" name="submit" />
     </div>
  </div>
  </form>
 </body>
</html>
