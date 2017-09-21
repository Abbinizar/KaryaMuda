<?php 

include "koneksi.php";

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>KaryaMuda-Form Komunitas</title>

<meta name="viewport" content="width=device-width, initial-scale=10">
	<link rel="stylesheet" href="css/style_isi.css">
	<link href='logo.png' style="width: 32px;height: 32px;" rel='shortcut icon'>

</head>
<body>
	<div id="fmatas"></div>
	<div id="fkisi">
			<div id="fkisi_atas">
				<center><h2>Daftar Akun</h2></center>
				<div class="fkform" >
				 <form method="POST" action="act_tambah.php">
				 	<font style="margin-left: 10px;">Nama Komunitas :</font><br>
  					<input type="text" name="nama">
  					<font style="margin-left: 10px;">Nama Penanggung Jawab :</font><br>
 					<input type="text" name="pj">
 					<font style="margin-left: 10px;">Tanggal Berdiri :</font><br>
  					<input type="date" name="tgl">
 					<font style="margin-left: 10px;">Provinsi :</font><br>
					<select id="provinsi" name="namaprovinsi">
						<?php
              			
               		   echo "<option>Pilih provinsi</option>"; 
             			  
                    $sql = "SELECT * FROM provinsi";
             			  $result = $connect->query($sql);

             			  while($row=mysqli_fetch_assoc($result)){
              				echo "<option value=".$row['id_prov'].">".$row['namaprovinsi']."</option>";
              			 }
              			 
           				 ?>
  					</select>
  					<font style="margin-left: 10px;">Kabupaten :</font><br>
 					<select id="kabupaten" name="kabupaten">
 							<?php
               					
               					echo "<option>Pilih Kabupaten</option>";

              					 $sql = "SELECT * FROM kabkota";
              					 $result = $connect->query($sql);

               					while($row=mysqli_fetch_assoc($result)){
             					    echo "<option value=".$row['id_kabkota'].">".$row['nama_kabkota']."</option>";
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