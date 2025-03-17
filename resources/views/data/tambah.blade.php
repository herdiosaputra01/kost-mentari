@extends('layout.master')
@section('title')
tambah
@endsection
@section('MenuTam')
active
@endsection
@section('konten')
    <div class="container">
        <div class="row mt-5">
            <div class="col-8 m-auto">
                <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Pengisian Kamar</h3>
                    
                </div>
                
                <div class="card-body">
                <form action="proses.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Foto Kamar</label>
                        <input type="file" accept="image/*" name="foto" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fasilitas</label>
                        <input type="text" name="fasilitas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih Lantai Kamar</option>
                        <option value="1">Kamar Lantai 1</option>
                        <option value="2">Kamar Lantai 2</option>
                        <option value="3">Kamar Lantai 3</option>
                    </select>
                    <br>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Kode Kamar</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                    </select>    
                    <div class="mb-3">
                        <br>
                        <h4>List Harga Kamar</h4>
                        <label for="exampleInputPassword1" class="form-label">Harga 1 Tahun</label>
                        <input type="text" name="1tahun" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga 1/2 Tahun</label>
                        <input type="text" name="1/2tahun" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga 1 Bulan</label>
                        <input type="text" name="1bulan" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga 1 Minggu</label>
                        <input type="texy" name="1minggu" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga 1 Hari</label>
                        <input type="texy" name="1hari" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Tambah</button> 
                    
                </form>
                
                </div>
                
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
     <br>
   
    @endsection
