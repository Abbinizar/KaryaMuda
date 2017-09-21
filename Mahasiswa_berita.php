<?php
if (isset($_SESSION['username'])) {

 die("anda belum login");

}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>KaryaMuda-Mahasiswa-Berita</title>

<meta name="viewport" content="width=device-width, initial-scale=10">
  <link rel="stylesheet" href="css/styleku.css">
  <link href='logo.png' style="width: 32px;height: 32px;" rel='shortcut icon'>

</head>
<body>

<div class="atas">
      <div id="logopojok">
      <a href="logout.php"><img src="img/mahasiswa.png" title="logout"></a>
    </div>
    <div id="cari">
      <input type="text" name="cari"  value="" >
    </div>
    <div id="opsi">
      <button class="button button1">Kota</button>
      <button class="button button2">Nasional</button>
</div>
<div class="all">
  <div id="kiri">
    <div id="logo">
      <img src="img/mahasiswa.png">
    </div>
    <div id="profil1">
      <div id="hprofil">
        Profil
      </div>
      <div id="iprofilm">
        <p><b>Nama Mahasiswa</b></p> <!-- nama mahasiswa -->
          <div id="ratprofil"></div><!-- ini buat naruh rating -->
        <p>Asal Perguruan Tinggi </p> <!-- asalnya -->
      </div>
    </div>
    <div id="halaman">
      <div id="hlaman">
        Halaman
      </div>
      <div id="ilaman">
        <div class="btn-group">
           <button class="button"><img src="img/notif.png">Notifikasi</button>
         <button class="button"><img src="img/berita.png">Berita</button>
         <button class="button"><img src="img/notif.png">Ide dan Karya</button>
         <button class="button"><img src="img/solusi.png">Solusi</button>
         <button class="button"><img src="img/relawan.png">Relawan</button>
      </div>
      </div>
    </div>
  </div>
  <div id="tengah">
    <div id="htengah">
    <div class="btn-group2">
    <button class="button button3">Pendidikan</button>
    <button class="button button3">Sosial</button>
    <button class="button button3">Pariwisata</button>
    </div>
    </div>

  <div id="konten">
    <section id="section-1"> <!-- ini nanti buat nulis berita nya   --> 
      <div class="konten">
        <div id="bgAtas">
          <div id="logokecil"><img src="img/komunitas.png"></div>
          <div id="komunitas"><p><b>Nama mahasiswa</b></div>
          <div id="nmkomunitas"><p>asal mahasiswa</div> <!-- ganti nama sesuai asal komunitasnya -->
          <div id="statusberita"><p>Statusnya?</div>
        </div>
        <div id="bgBawah"> 
          <div id="fotomm"><img src="">
          <div id="berisolusi"><button class="button button8">Beri Solusi</button></div>
          </div> <!-- isi sesuai yang sudah diupload pada form  -->
          <div id="isiberitam"><p>
              <h2>ini judulnya</h2> 
              <p>isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini
                isi paragraf ini visi paragraf ini v isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini isi paragraf ini</p> <!-- isi sesuai konten  yang ada pada form -->
                <b><a href="">Lanjutkan..</a></b>
          </div>
        </div>
        
      </div>
    </section>
    </div>

  </div>
  <div id="kanan">
     <center><H2>Top User</H2></center>
  <div id="rating1"> <!-- dilooping 5x kalau bisa kalau g bisa ya gini aja gpp :D  -->
    <center><img src="img/mahasiswa.png"></center>
    <div id="rat">Rating</div> <!-- top rating  -->
    <div id="namamhs"><b>Nama Mahasiswa</b></div>
    <div id="totalsol">Total solusi</div>
    <div id="totalrel">Total relawan</div>
  </div>
<!--   sampai sini -->
<div id="rating1"> <!-- dilooping 5x kalau bisa kalau g bisa ya gini aja gpp :D  -->
    <center><img src="img/mahasiswa.png"></center>
    <div id="rat">Rating</div> <!-- top rating  -->
    <div id="namamhs"><b>Nama Mahasiswa</b></div>
    <div id="totalsol">Total solusi</div>
    <div id="totalrel">Total relawan</div>
  </div>
  <div id="rating1"> <!-- dilooping 5x kalau bisa kalau g bisa ya gini aja gpp :D  -->
    <center><img src="img/mahasiswa.png"></center>
    <div id="rat">Rating</div> <!-- top rating  -->
    <div id="namamhs"><b>Nama Mahasiswa</b></div>
    <div id="totalsol">Total solusi</div>
    <div id="totalrel">Total relawan</div>
  </div>
  <div id="rating1"> <!-- dilooping 5x kalau bisa kalau g bisa ya gini aja gpp :D  -->
    <center><img src="img/mahasiswa.png"></center>
    <div id="rat">Rating</div> <!-- top rating  -->
    <div id="namamhs"><b>Nama Mahasiswa</b></div>
    <div id="totalsol">Total solusi</div>
    <div id="totalrel">Total relawan</div>
  </div>
  <div id="rating1"> <!-- dilooping 5x kalau bisa kalau g bisa ya gini aja gpp :D  -->
    <center><img src="img/mahasiswa.png"></center>
    <div id="rat">Rating</div> <!-- top rating  -->
    <div id="namamhs"><b>Nama Mahasiswa</b></div>
    <div id="totalsol">Total solusi</div>
    <div id="totalrel">Total relawan</div>
  </div>
  </div>

</div>
<div class="bawah">
  @Copyright | LAN Team-UNEJ-Gemastik 2017
</div>

</body>
</html> 