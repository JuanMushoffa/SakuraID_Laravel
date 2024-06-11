<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/stylee.css') }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
</head>

<body>
  @include('partials.sidebar')
  <section class="home-section">
        <nav>
            <div class="profile-details">
                <span class="admin_name" style="font-size: 20px; margin-right: 10px;margin-top:15px">Admin</span>
                <a href="admin.php">
                    <img src="assets/fotoprofile.jpg" alt="" />
                </a>
            </div>
         </nav>
    </section>
  <div class="home-content">
      @yield('content')
    </div>
  <script>
    function showDetails(nama, jenis_kompensasi, biaya_kompensasi, total_kompensasi, status) {
         alert(`Nama Pegawai : ${nama}\n Jenis Kompensasi : ${jenis_kompensasi}\n Biaya Kompensasi : ${biaya_kompensasi}\n Total Kompensasi : ${total_kompensasi}\n Status : Sukses`);
      }
  </script>
</body>

</html>
