<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Kost Pria Pondok Mentari</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-secondary navbar-secondary ">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="/beranda">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="/tambah">Tambah Kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/pesanan">Pesanan Kamar</a>
                </li> 
            </div>
            <div class="bg-white px-4 py-2 rounded">Herdio Saputra <br> 0822 8307 4743</div>
        </div> 
    </nav>

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
    <footer class="fixed-bottom bg-secondary text-white py-2 mt-4 text-center">
        Copyright &copy; Herdio Saputra - 2025
    </footer>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
