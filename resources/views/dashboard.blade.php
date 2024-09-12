<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style/dashboard.style.css')}}">
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
    <div class="dashboard-cards">
       <div class="card yellow" style="color:black; ">Siswa : 1002<i class="fa-solid fa-person" style="color:black;"></i></div>
       <div class="card green" style="color:black; ">Petugas : 4 <i class="fa-regular fa-address-card" style="color:black;"></i></div>
       <div class="card blue" style="color:black; ">Kelas : <i class="fa-solid fa-house-user" style="color:black;"></i></div>
       <div class="card red" style="color:black; ">SPP : <i class="fa-regular fa-credit-card" style="color:black;"></i></div>
    </div>

   
        <div class="history-section">
            <h2>LAST HISTORY :</h2>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Petugas</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Nominal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>admin</td>
                        <td>1123456</td>
                        <td>Ambatukam</td>
                        <td>2024-8-30</td>
                        <td>150000</td>
                        <td>
                            <button class="btn delete">delete</button>
                            <button class="btn edit">edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>admin</td>
                        <td>1223456</td>
                        <td>Rehan Wangsaff</td>
                        <td>2024-8-30</td>
                        <td>150000</td>
                        <td>
                            <button class="btn delete">delete</button>
                            <button class="btn edit">edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>admin</td>
                        <td>1233456</td>
                        <td>Asep Sigma</td>
                        <td>2024-8-30</td>
                        <td>150000</td>
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

