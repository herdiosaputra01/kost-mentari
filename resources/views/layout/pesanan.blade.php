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
            <a class="navbar-brand text-white" href="beranda">Beranda</a>
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

    <footer class="fixed-bottom bg-secondary text-white py-2 mt-4 text-center">
        Copyright &copy; Herdio Saputra - 2025
    </footer>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
