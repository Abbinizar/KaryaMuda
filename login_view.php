<?php
include 'koneksi.php';

if($_SESSION){
    if($_SESSION['level']=="mahasiswa")
    {
        header("Location: mahasiswa_berita.php");
    }
    if($_SESSION['level']=="komunitas")
    {
        header("Location: komunitas_berita.php");
    }
}

?>
<html>
	<head>
		<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta name="viewport" content="width=device-width, initial-scale=10">
	<link rel="stylesheet" href="css/clogin.css">
	<link href='logo.png' style="width: 32px;height: 32px;" rel='shortcut icon'>

	</head>
	<title>Halaman Login</title>
	<body>
				
					<div id="bglogin"> 
					<H3>MASUK</H3>
					</div>
					<div id="bglogin1">
					<form  action="act_login.php" method="POST"> <!-- action biasanya digunain buat kode php yang jalanin login setauku sih -->
					<div id="email">
						<input type="text" name="username" placeholder="username" autofocus required>
					</div>
					<div id="password">
						<input type="password" name="password" placeholder="password" autofocus required>
					</div>

					<input type="submit" name="submit" value="LOGIN">
					</form>
					<div id="Lupa" >
					<a href=""><i><u>Lupa Password?</u></i></a>
					</div>
					<div id="dft">
					<a href="#popup"><button type="button" id="daftar" >Daftar</button></a>
					</div>
					<div id="popup">
    					<div class="window">
       					<a href="#" class="close-button" title="Close">X</a>
        				<h1>Anda Akan Mendaftar sebagai ?</h1>
        				<div id="link1"><a href="form_komunitas.php">Komunitas</a></div>	
        				<div id="link2"><a href="form_Mahasiswa.php">Mahasiswa</a></div>	
   				    	</div>
					</div>
					</div>
					
			 <a href="index.php">	<button id="back">KEMBALI</button></a>

			
	</body>
</html>