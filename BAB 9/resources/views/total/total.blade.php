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
        .btn-edit {
          background-color: #515151; 
          color: white;
        }

        .btn-delete {
          background-color: #249124; 
          color: white;
        }
    </style>
</head>
<div class="table-container-datol">
        <h1>Data Total</h1><br>

        <!-- Daftar data total -->
        <table id="listTotal">
            <thead>
                <tr>
                    <th scope="col" style="width: 10%">Nama Pegawai</th>
                    <th scope="col" style="width: 10%">Jabatan Pegawai</th>
                    <th scope="col" style="width: 10%">Jenis Kompensasi</th>
                    <th scope="col" style="width: 10%">Biaya Kompensasi</th>
                    <th scope="col" style="width: 10%">Total Kompensasi</th>
                    <th scope="col" style="width: 50%; text-align: center" >Action</th>
                </tr>
            </thead>
  <tbody>
    @forelse ($total as $totals)
    <tr>
      <td>{{ $totals->nama }}</td>
      <td>{{ $totals->jabatan }}</td>
      <td>{{ $totals->jenis_kompensasi }}</td>
      <td>{{ $totals->biaya_kompensasi}}</td>
      <td>{{ $totals->total_kompensasi }}</td>
      <td>
        <a class='btn-edit' href="/totals/edit/{{ $totals->id_total }}">Edit</a>
        |
        <a class='btn-delete' href="/totals/hapus/{{ $totals->id_total }}">Hapus</a>
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
            <button class="btn" >
                <a href="/totals/tambah">Tambah Data</a>
              </button>
        </div>
@endsection
