@extends('layouts.app')

@section('title')
Total | Sakura ID
@endsection


@section('content')
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        table {
            
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #1885ed;
        }
        .btn-edit, .btn-delete , .btn-put{
          padding: 8px 8px;
          margin-right: 1px;
          margin-left: 2px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          font-size: 14px;
          transition: background-color 0.3s; 
        }
        
        .btn-detail {
          background-color: #f442f4; 
          color: white;
        }
        .status-success {
            background-color: #d4edda;
            padding: 5px;
            align-items: center;
            text-align: center;
        }
    </style>
</head>
<div class="table-container__datkom">
        <h1>Data Kompensasi</h1>

        <!-- Daftar data kompen -->
        <table id="listKompen">
            <thead>
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Jenis Kompensasi</th>
                    <th>Biaya Kompensasi</th>
                    <th>Total Kompensasi</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
  <tbody>
    @forelse ($kompensasi as $kompensasi)
    <tr>
      <td>{{ $kompensasi->nama }}</td>
      <td>{{ $kompensasi->jenis_kompensasi }}</td>
      <td>{{ $kompensasi->biaya_kompensasi}}</td>
      <td>{{ $kompensasi->total_kompensasi }}</td>
      <td><p class='status-success' name='status' id='status'>Sukses</p></td>
      <td>
      <button class="btn-detail" onclick='showDetails("{{ $kompensasi->nama }}", "{{ $kompensasi->jenis_kompensasi }}", "{{ $kompensasi->biaya_kompensasi}}", "{{ $kompensasi->total_kompensasi }}")'>Detail</button>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="6" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
        <div class="btn-container-datol">
            
        </div>
        <button type="button" class="btn-container-datol">
            <a href="/kompensasi/cetak">Cetak</a>
        </button>
        <script>
            function showDetails(nama, jenis_kompensasi, biaya_kompensasi, total_kompensasi, status) {
         alert(`Nama Pegawai : ${nama}\n Jenis Kompensasi : ${jenis_kompensasi}\n Biaya Kompensasi : ${biaya_kompensasi}\n Total Kompensasi : ${total_kompensasi}\n Status : Sukses`);
      }
        </script>
@endsection
