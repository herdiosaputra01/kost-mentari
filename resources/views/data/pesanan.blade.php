@extends('layout.master')
@section('title')
pesanan
@endsection
@section('MenuPes')
active
@endsection
@section('konten')
    <div class="container">
        <div class="row mt-5">
            <div class="col-5 m-auto">
                <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Pesanan Kamar</h3>
                    
                </div>
                
                <div class="card-body">
                <form action="proses.php" method="post" enctype="multipart/form-data">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Konfirmasi Pesanan
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Pesanan</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Apakah Anda Setuju Atas Pesanan Ini
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak Setuju</button>
                            <button type="button" class="btn btn-primary">Setuju</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Bukti Pembayaran</button>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Pembuatan Kwitansi</button>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    @endsection



