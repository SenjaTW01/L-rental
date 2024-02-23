<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Homepage - L`Rent</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt&display=swap");
    </style>
</head>

<body>
    @extends('master')
    {{-- rawr --}}

    @section('section1')
        <section class="bg-primary flex justify-center gap-10 p-8">
            {{-- img pindah --}}
            <div class="w-135 h-60 bg-secondary overflow-hidden rounded-2xl"></div>
            {{-- iklan --}}
            <div class="flex flex-col gap-4">
                <div class="w-96 h-28 bg-secondary overflow-hidden rounded-2xl"></div>
                <div class="w-96 h-28 bg-secondary overflow-hidden rounded-2xl"></div>
            </div>
        </section>
    @endsection

    @section('section2')
        <section class="bg-secondary flex justify-center flex-col">
            <div class="flex px-48 pt-10">
                <span class="text-primary text-4xl font-poppins">
                    Mau rental kendaraan <br>tapi bingung tempatnya dimana? <br>L - Rent in Aja !
                </span>
            </div>
            <div class="">
                <span></span>
                <div class="flex gap-10 justify-center py-10">
                    <div class="w-36 h-36 bg-primary flex relative">
                        <div class="absolute bottom-0 w-full bg-nav-color h-8">
                            <span></span>
                        </div>
                    </div>
                    <div class="w-36 h-36 bg-primary flex relative">
                        <div class="absolute bottom-0 w-full bg-nav-color h-8">
                            <span></span>
                        </div>
                    </div>
                    <div class="w-36 h-36 bg-primary flex relative">
                        <div class="absolute bottom-0 w-full bg-nav-color h-8">
                            <span></span>
                        </div>
                    </div>
                    <div class="w-36 h-36 bg-primary flex relative">
                        <div class="absolute bottom-0 w-full bg-nav-color h-8">
                            <span></span>
                        </div>
                    </div>
                    <div class="w-36 h-36 bg-primary flex relative">
                        <div class="absolute bottom-0 w-full bg-nav-color h-8">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    @section('section3')
    <section>
        <div class="bg-gray-white w-auto h-196 flex">
            <img src="{{asset('asset/Frame.png')}}" alt="Ilustrasi" class="pl-48 pt-12">
            <div class="flex-col justify-center pt-24 pl-32"><h1 class="text-primary text-4xl font-bold">Tentang Kami</h1><div class="font-semibold text-xl max-w-135 pt-8"><p>L’rent adalah Web sewa mobil di Ciamis yang hadir untuk memberikan kemudahan dan kecepatan bagi anda dalam menyewa mobil di Ciamis. Dimanapun dan kapanpun. <br><br> Kami memungkinkan anda untuk dapat mengakses puluhan unit mobil siap sewa yang dapat anda pilih sesuai kebutuhan. Mulai dari City Car Agya, MPV Innova hingga Minibus Elf. Semua dapat anda sewa hanya dengan satu klik, hanya di Bali Citra Medina.</p></div></div>
        </div>
    </section>
    @endsection
</body>

</html>
