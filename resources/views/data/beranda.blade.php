@extends('layout.master')
@section('title')
beranda
@endsection
@section('MenuBer')
active
@endsection
@section('konten')
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
    @endsection


