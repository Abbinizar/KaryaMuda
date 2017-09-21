<?php 

include 'koneksi.php';

 ?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>KaryaMuda-Form Mahasiswa</title>

<meta name="viewport" content="width=device-width, initial-scale=10">
	<link rel="stylesheet" href="css/style_isi.css">
	<link href='logo.png' style="width: 32px;height: 32px;" rel='shortcut icon'>

</head>
<body>
	<div id="fmatas"></div>
	<div id="fmisi">
			<div id="fmisi_atas">
				<center><h2>Daftar Akun</h2></center>
				<div class="fmform" >
				 <form method="POST" action="act_tambahm.php">
				 	<font style="margin-left: 10px;">Nama :</font><br>
  					<input type="text" name="name">
          <font style="margin-left: 10px;">NIM :</font><br>
          <input type="text" name="NIM">
  					<font style="margin-left: 10px;">Tanggal lahir :</font><br>
  					<input type="date" name="tgl">
					<font style="margin-left: 10px;">Jenis Kelamin :</font><br>
					<select id="jenkel" name="jenkel">
   				 	<option value="au">-</option>
    				<option value="ca">Laki-Laki</option>
    				<option value="usa">Perempuan</option>
  					</select>
 					
  					<font style="margin-left: 10px;">Asal Universitas :</font><br>
 					<select id="Universitas" name="univ">
 						 <?php
               
                  echo "<option> Pilih Universitas </option>";
            
               $sql = "SELECT * FROM Universitas";
               $result = $connect->query($sql);

               while($row=mysqli_fetch_assoc($result)){
               //My Personal echo     
              echo "<option value='".$row['id_univ']."'>".$row['namauniversitas']."</option>";
               }
            ?>
 					</select>
            <font style="margin-left: 10px;">ID Komunitas :</font><br>
          <select id="Universitas" name="komunitas">
             <?php
               
                  echo "<option> Pilih Komunitas </option>";
            
               $sql = "SELECT * FROM Komunitas";
               $result = $connect->query($sql);

               while($row=mysqli_fetch_assoc($result)){
               //My Personal echo     
              echo "<option value='".$row['id_komunitas']."'>".$row['namakomunitas']."</option>";
               }
            ?>
          </select>

 					<font style="margin-left: 10px;">Email :</font><br>
 					<input type="text" name="email">
 					<font style="margin-left: 10px;">Password :</font><br>
 					<input type="text" name="pass">
 					<input type="submit" name="submit" value="submit">
 					<button type="button">Batal</button>
					</form> 
				</div>
			</div>
	</div>
	


</body>
</html> 