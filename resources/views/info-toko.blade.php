@extends('layouts.main')

@section('content')
    <div class="container-fluid pt-3">

        <div class="card p-4">
            <div class="row">
                <div class="col-lg-4">
                    <img class="mx-auto d-block" src="/image/wp.jpg" alt="Gambar Toko" style="width:12rem; height:12rem; border-radius: 100%">
                </div>
                <div class="detail-toko col-lg-8">
                    <h3>Detail Toko "Nama Toko"</h3>
                    <table class="mt-4">
                        <tr>
                            <th>Nama Toko</th>
                            <th>:</th>
                            <td>Toko Jaya Berkah Sentosa</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <th>:</th>
                            <td>Jalan Moh. Toha No. 12 Bandung</td>
                        </tr>
                        <tr>
                            <th>Pemilik</th>
                            <th>:</th>
                            <td>Kokasih</td>
                        </tr>
                        <tr>
                            <th>Jenis Toko</th>
                            <th>:</th>
                            <td>Sembako</td>
                        </tr>
                    </table>
                    <div class="d-flex mt-3 ">
                        <a href="#" class="btn btn-primary me-2">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <span>Edit</span>
                        </a>
                        <a href="#" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                            <span>Hapus</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

@endsection