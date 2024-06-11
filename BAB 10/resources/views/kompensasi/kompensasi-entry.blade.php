@extends('layouts.app')

@section('title')
Tambah Total | Sakura ID
@endsection

@section('content')
<head>
<style>
        
        .form-container-entol {
            background-color: #fff;
            padding: 10%;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-container-entol h2 {
            margin-top: -120px;
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container-entol input {
            width: calc(100% - 16px);
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-container-entol .btn {
            width: 100%;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .form-container-entol .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<div class="form-container-entol">
    <h2>Entry Data Kompen</h2>
        <form action="{{ url('/kompensasi/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama Pegawai</label>
        <input class="input" type="text" name="nama" id="nama" placeholder="Nama Pegawai" value="{{ old('nama') }}" />
        @error('nama')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

        <label for="jenis_kompensasi">Jenis Kompensasi</label>
        <input class="input" name="jenis_kompensasi" id="jenis_kompensasi" placeholder="Jenis Kompensasi" value="{{ old('jenis_kompensasi') }}"/>
        @error('jenis_kompensasi')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

        <label for="biaya_kompensasi">Biaya Kompensasi</label>
        <input class="input" name="biaya_kompensasi" id="biaya_kompensasi" placeholder="Biaya Kompensasi" value="{{ old('biaya_kompensasi') }}"/>
        @error('biaya_kompensasi')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

        <label for="total_kompensasi">Total Kompensasi</label>
        <input class="input" name="total_kompensasi" id="total_kompensasi" placeholder="Total Kompensasi" value="{{ old('total_kompensasi') }}"/>
        @error('total_kompensasi')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

        <label for="status">Status</label>
        <input class="input" name="status" id="status" placeholder="Status" value="{{ old('status') }}"/>
        @error('total_kompensasi')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

        <button type="submit" class="btn" name="simpan" style="margin-top: 50px">
        Simpan
        </button>
        </form>
    </div>
@endsection
