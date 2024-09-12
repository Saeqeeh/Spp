<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style/pembayaran.style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('font/css/all.min.css')}}">
</head>
<body>



<div class="sidebar">
    
<img src="{{URL::asset('/MAHAPUTRA.png')}}" height="200" width="200" class=image>
    
    
  <a class="#dashboard" href="#dashboard"><i class="fa-solid fa-bars"></i> Dashboard</a>
  <a href="#history"><i class="fa-solid fa-bars"></i> History</a>
  <a href="#pembayaran"><i class="fa-solid fa-bars"></i> Pembayaran</a>
  <a href="#data_siswa"><i class="fa-solid fa-bars"></i> Data Siswa</a>
  <a href="#data_petugas"><i class="fa-solid fa-bars"></i> Data Petugas</a>
  <a href="#data_spp"><i class="fa-solid fa-bars"></i> Data Spp</a>
  <a href="#data_kelas"><i class="fa-solid fa-bars"></i> Data kelas</a>
  <a href="#laporan"><i class="fa-solid fa-bars"></i> Laporan</a>
  <a href="#logout" id='logout'><i class="fa-solid fa-bars"></i> Logout</a>
</div>


  <div class="header">
    <h2>SMK MAHAPUTRA CERDAS UTAMA</h2>
  </div>

<div class="content">
    <h2>PEMBAYARAN :</h2>
        <div class="payment-form">
            <form>
                <label for="nisn">NISN :</label>
                <input type="number" id="nisn" name="nisn" placeholder="Masukkan NISN">
                <button type="submit" style="border-radius:5px; " >Input</button>
            </form>
        </div>
</div>

            
  

  </div>


  



</body>
</html>

