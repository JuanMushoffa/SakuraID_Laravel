@extends('layouts.app')

@section('title')
Hapus Category | Catshop Admin
@endsection

@section('content')
<head>
<style>
    .form-login {
            margin-top: -120px;
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
            width: calc(100% - 16px);
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
    }
    </style>
</head>
    <div class="form-login">
    <h3>Hapus Data Total</h3>
       <h4>Ingin Menghapus Data ?</h4>
       <button type="submit" class="btn" name="hapus" style="width: 40%; margin: 20px auto;">
            <a href="{{ url('/totals/destroy/' . $total->id_total ) }}">
            Yes
            </a>
        </button>
        <button type="submit" class="btn" name="tidak" style="width: 40%; margin: 20px auto;">
            <a href="/totals">
            No
            </a>
        </button>
     </div>
  
</div>
@endsection
