@extends('layout.master')
@section('title')
beranda
@endsection
@section('MenuBer')
active
@endsection
@section('konten')
<br>
    <section class="container mx-auto p-8">
        <h1 class="text-4xl font-bold">Temukan Hunian Nyaman di Kos-Kosan Kami</h1>
        <p class="text-gray-700 mt-2">Selamat Datang di Kost Pria Pondok Mentari! Temukan Kenyamanan Sejati Dalam Hunian Kami.</p>

        <div class="flex items-center space-x-2 mt-4">
            <div class="w-4 h-4 bg-black rounded-full"></div>
            <p class="text-gray-800">Lamgugob, Banda Aceh City, Aceh, Banda Aceh, Indonesia</p>
        </div>
        

        <div class="container text-center mt-6 bg-white">
            <div class="row">
                <div class="col-6">
                    <img src="{{asset('image/kost.jpg')}}" class="img-thumbnail img-fluid" alt="kost">
                </div>

                        <div class="col-6">
                            <title>Kamar</title>
                            <style>
                                .frame {
                                    width: 350px; 
                                    height: auto;
                                    padding: 20px;
                                    border-radius: 50px 50px 0 0;
                                    display: flex;
                                    justify-content: right;
                                    align-items: right;
                                    position: relative;
                                }
                                .frame img {
                                    width: 100%;
                                    height: auto;
                                    border-radius: 50px 50px 0 0;
                                }
                                .border-frame {
                                    position: absolute;
                                    top: 40px;
                                    left: 1px;
                                    width: 90%;
                                    height: 90%;
                                    border: 3px solid black;
                                    border-radius: 50px 50px 0 0; 
                                }
                            </style>
                        
                            <div class="frame">
                                <img src="{{ asset('image/kamar.jpg') }}" alt="Kamar">
                                <div class="border-frame"></div>
                            </div>
                        </div>
            </div>
        </div>

    </section>
    
    @endsection


