<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style/datakelas.style.css')}}">
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
        
        <div class="history-section">
            <h2>DATA KELAS :</h2>
            <button class="submit">New +</button>
            <div class="search-container">
                <!-- <input type="search" name="search" class="search-input"> -->
                <input type="search" name="search"  placeholder="Cari NAMA atau NISN" id="search" class="search-input">
                <button class="search-button">Search</button>
            </div>
            

            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Jumlah Siswa</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PPLG 2</td>
                        <td>Pemograman Perangkat Lunak & Gim</td>
                        <td>26</td>
                        <td>
                            <button class="btn delete">delete</button>
                            <button class="btn edit">edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>DKV 2</td>
                        <td>Desain Komunikasi Visual</td>
                        <td>32</td>
                        <td>
                            <button class="btn delete">delete</button>
                            <button class="btn edit">edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>PPLG 1</td>
                        <td>Pemograman Perangkat Lunak $ Gim</td>
                        <td>33</td>
                        <td>
                            <button class="btn delete">delete</button>
                            <button class="btn edit">edit</button>
                        </td>
                    </tr>
                </tbody>
        </div>
    </div>
  </div>


  



</body>
</html>

