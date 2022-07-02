<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_pembayaran-isidata.css">
    <title>Pembayaran | Isi data</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
  <header>
    <nav class="navbar d-flex flex-row">
      <img src="img/GoTel.png" alt="GoTel" width="194px">
      <div class="search">
        <input type="text" placeholder="Cari apapun di sini" class="bg-light rounded">
        <img src="img/pembesar.png" alt="">
      </div>
      <div class="lang d-flex flex-row ">
        <img src="img/lang.png" alt="" width="32px" height="32px">
        <p class="mx-3">Bahasa Indonesia</p>
        <img src="img/polygon.png" alt="">
      </div>
      <div class="lokasi d-flex flex-row">
        <img src="img/pinpoint.png" alt="" width="32px" height="32px">
        <p class="mx-3">Surakarta, Jawa Tengah</p>
      </div>
      <div class="user d-flex flex-row">
        <img src="img/akun.png" alt="">
        <p class="mx-3">John Doe</p>
      </div>
    </nav>
    <div class="e0_29 menu d-flex d-row">
      <div class="submenu d-flex d-row ">
        <img src="img/Vectorkamar.png" alt="" width="20px" height="20px">
        <p>Tempat Menginap</p>
      </div>
      <div class="submenu d-flex d-row">
        <img src="img/Vectorkereta.png" alt="" width="20px" height="20px">
        <p>Transportasi</p>
      </div>
      <div class="submenu d-flex d-row">
        <img src="img/Vectorpartner.png" alt="" width="20px" height="20px">
        <p>Jadi Partner GoTel</p>
      </div>
    </div>
  </header>
    
  <main class="content">
    <h4>Pemesanan The Signature Hill View Room Only</h4>
    <h6>Isi data pemesan dan data tamu</h6>

    <div class="prosedur d-flex d-row">
      <div class="subprosedur">
        <div class="circle">
          <p>1</p>
        </div>
        <p>Isi Data</p>
      </div>
      <div class="subprosedur">
        <div class="circle">
          <p>2</p>
        </div>
        <p>Review</p>
      </div>
      <div class="subprosedur">
        <div class="circle">
          <p>3</p>
        </div>
        <p>Pembayaran</p>
      </div>
      <div class="subprosedur">
        <div class="circle">
          <p>4</p>
        </div>
        <p>Proses</p>
      </div>
    </div>

    <div class="form d-flex d-row mb-3" >
      <div class="pemesan">
        <h5>Data Pemesan</h5>
        <form action="" method="post" class="">
          <label for="nama"> Nama Lengkap</label><br>
          <input type="text" id="nama" name="nama" ><br>
          <label for="nama"> No. Handphone Kontak</label><br>
          <input type="text" id="nama" name="nama" placeholder="+62" ><br>
          <label for="email">Email</label><br>
          <input type="email" name="email" id="email" ><br>
          <label for="check-in">Check-In</label>
          <input type="date" name="check-in" id="check-in" >
          <label for="check-out">Check-Out</label>
          <input type="date" name="check-out" id="check-out">
        </form>
      </div>
      <div class="tamu">
        <h5>Data tamu</h5>
        <form action="" method="post">
          <label for="tamu">Nama Lengkap Tamu</label><br>
          <input type="text" id="tamu" name="tamu" >
        </form>
      </div>
    </div>
    <div class="tombol">
      <button type="button" class="btn  btn-secondary">CLOSE</button>
      <button type="button" class="btn btn-primary">NEXT</button>
    </div>
    
  </main>
  <footer class="d-flex d-row">
    <div class="foo">
      <img src="img/GoTel.png" alt=""><br>
      <div class="partner d-flex d-row">
        <img src="img/Vectorhandshake.png" alt="">
        <h5>Jadi Partner GoTel</h5>
      </div>
      <div class="partner-bayar">
        <h3>Partner Pembayaran</h3>
        <div class="kotak">
          <div class="d-flex d-row">
            <img src="img/bca.png" alt="" width="60px" height="45px">
            <img src="img/man.png" alt="" width="60px" height="45px">
            <img src="img/bni.png" alt="" width="60px" height="45px">
            <img src="img/bri.png" alt="" width="60px" height="45px">
          </div>
          <div class="d-flex d-row">
            <img src="img/vsa.png" alt="" width="60px" height="45px">
            <img src="img/mca.png" alt="" width="60px" height="45px">
            <img src="img/jcb.png" alt="" width="60px" height="45px">
            <img src="img/atm.png" alt="" width="45px" height="45px">
          </div>
          <div class="d-flex d-row">
            <img src="img/alt.png" alt="" width="60px" height="45px">
            <img src="img/pri.png" alt="" width="60px" height="45px">
            <img src="img/alf.png" alt="" width="60px" height="45px">
            <img src="img/idm.png" alt="" width="60px" height="45px">
          </div>
        </div>
      </div>
    </div>
    <div class="foo2">
      <div class="link d-flex d-row">
        <div class="text">
          <h5>Tentang</h5>
          <a href="#">Tentang Kami</a><br>
          <a href="#">Blog</a><br>
          <a href="#">Karir</a><br>
          <a href="#">Pekerjaan</a><br>
          <a href="#">Berita</a><br>
          <a href="#">Galeri</a><br>
          <a href="#">Afiliasi</a><br>
        </div>
        <div class="text">
          <h5>Support</h5>
          <a href="#">Kontak Kami</a><br>
          <a href="#">Online Chat</a><br>
          <a href="#">WhatsApp</a><br>
          <a href="#">Telegram</a><br>
          <a href="#">Tiket</a><br>
          <a href="#">Call Centre</a><br>
          <a href="#">Bantuan</a><br>
        </div>
        <div class="text">
          <h5>FAQ</h5>
          <a href="#">Akun</a><br>
          <a href="#">Organisir</a><br>
          <a href="#">Order</a><br>
          <a href="#">Pembayaran</a><br>
          <a href="#">Pengembalian</a><br>
          <a href="#">Copyright</a><br>
          <a href="#">Bahasa</a><br>
        </div>
      </div>
      <h3>Follow Kami di:</h3><br>
      <div class="sosmed d-flex d-row">
        <img src="img/Vectortwt.png" alt=""  width="32px" height="32px">
        <p>Twitter</p>
        <img src="img/Vectorfb.png" alt="" width="32px" height="32px">
        <p>Facebook</p>
        <img src="img/ig.png" alt="" width="32px" height="32px">
        <p>Instagram</p>
        <img src="img/yt.png" alt="" width="32px" height="32px">
        <p>Youtube</p>
      </div>
    </div>
  </footer>  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   
</body>
</html>