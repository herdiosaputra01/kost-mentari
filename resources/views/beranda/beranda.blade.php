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
            <a class="navbar-brand text-white" href="#">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="/mahasiswa">Tambah Kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/dosen">Pesanan Kamar</a>
                </li> 
            </div>
            <div class="bg-white px-4 py-2 rounded">Herdio Saputra <br> 0822 8307 4743</div>
        </div>
        
    </nav>
    <br>
    <!-- Hero Section -->
    <section class="container mx-auto p-8">
        <h1 class="text-4xl font-bold">Temukan Hunian Nyaman di Kos-Kosan Kami</h1>
        <p class="text-gray-700 mt-2">Selamat Datang di Kost Pria Pondok Mentari! Temukan Kenyamanan Sejati Dalam Hunian Kami.</p>

        <div class="flex items-center space-x-2 mt-4">
            <div class="w-4 h-4 bg-black rounded-full"></div>
            <p class="text-gray-800">Lamgugob, Banda Aceh City, Aceh, Banda Aceh, Indonesia</p>
        </div>
        

        <div class="container text-center mt-3 bg-white">
            <div class="row">
                <div class="col-4">
                   <img src="{{asset('image/kost.jpg')}}" class="img-thumbnail img-fluid" alt="">
                </div>
            </div>

    </section>

    <footer class="fixed-bottom bg-secondary text-white py-2 mt-4 text-center">
        Copyright &copy; Herdio Saputra - 2025
    </footer>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
