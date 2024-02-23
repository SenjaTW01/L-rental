<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Homepage - L`Rent</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    </style>
</head>

<body>
    @extends('master')
    {{-- rawr --}}

    @section('section1')
        <section class="bg-primary flex justify-center gap-10 p-8">
            {{-- img pindah --}}
            <div class="w-135 h-56 bg-secondary overflow-hidden rounded-2xl"></div>
            {{-- iklan --}}
            <div class="flex flex-col gap-4">
                <div class="w-96 h-27 bg-secondary overflow-hidden rounded-2xl"></div>
                <div class="w-96 h-27 bg-secondary overflow-hidden rounded-2xl"></div>
            </div>
        </section>
    @endsection

    @section('section2')
        <section class="bg-secondary flex justify-center flex-col">
            <div class="flex px-40 pt-10">
                <span class="text-heading text-4xl font-poppins font-medium">
                    Mau Nyari tempat rental <br>tapi bingung tempatnya dimana? <br>L - Rent in Aja !
                </span>
            </div>

            <div class="py-16">
                <div class="flex justify-center px-20">
                    <span class="text-heading text-3xl font-poppins font-medium">Kendaraan ?</span>
                </div>
                <div class="flex justify-start px-40">
                    <span class="text-heading text-3xl font-poppins font-medium">Mobil</span>
                </div>
                <div class="flex gap-10 justify-center pb-10 pt-5 items-center">
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('selection') }}" class="flex flex-col"><i
                                class="bi bi-chevron-right text-2xl"></i>
                            <span>More...</span></a>
                    </div>
                </div>

                <div class="flex justify-start px-40">
                    <span class="text-heading text-3xl font-poppins font-medium">Motor</span>
                </div>
                <div class="flex gap-10 justify-center pb-10 pt-5 items-center">
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div>
                        <a href="" class="flex flex-col"><i class="bi bi-chevron-right text-2xl"></i>
                            <span>More...</span></a>
                    </div>
                </div>

                <div class="flex justify-center px-20 pt-14">
                    <span class="text-heading text-3xl font-poppins font-medium">Pakaian ?</span>
                </div>
                <div class="flex justify-start px-40">
                    <span class="text-heading text-3xl font-poppins font-medium">Pakaian Adat</span>
                </div>
                <div class="flex gap-10 justify-center pb-10 pt-5 items-center">
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div>
                        <a href="" class="flex flex-col"><i class="bi bi-chevron-right text-2xl"></i>
                            <span>More...</span></a>
                    </div>
                </div>

                <div class="flex justify-start px-40">
                    <span class="text-heading text-3xl font-poppins font-medium">Pakaian Coseplay</span>
                </div>
                <div class="flex gap-10 justify-center pb-10 pt-5 items-center">
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-section">
                        <div class="card-section-inside">
                            <span></span>
                        </div>
                    </div>
                    <div>
                        <a href="" class="flex flex-col"><i class="bi bi-chevron-right text-2xl"></i>
                            <span>More...</span></a>
                    </div>
                </div>

            </div>
        </section>
    @endsection

    @section('section3')
        <section class="flex justify-between px-48 pt-10 bg-sec3">
            <div class="w-96 overflow-hidden">
                <img src="{{ asset('assets/Ellipse 23.png') }}" alt="">
            </div>
            <div class="flex flex-col w-96">
                <span class="text-4xl font-poppins text-primary pt-5 font-bold">Tentang L`Rent</span>
                <span class="pt-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias, sequi rerum? Accusamus
                    quidem cumque
                    nostrum, dicta atque inventore iure quis reprehenderit, obcaecati modi assumenda natus error ex non vero
                    quod!</span>
                <span class="pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, provident, atque
                    deleniti
                    laudantium dolore a nostrum quidem similique tempore cumque aspernatur ad sed esse nemo perspiciatis
                    saepe! Minima, consectetur eum.</span>
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
