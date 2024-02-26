<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @extends('master')

    @section('content')
        <section>
            <div class="flex flex-wrap gap-6 justify-center pb-10 pt-5 items-center">

                {{-- item 1 --}}
                <div class="text-smn text-text_desk w-365 flex-wrap flex items-center justify-center">
                    <a href="{{route('Beli')}}">
                    <img src="{{ asset('assets/MobilTest.svg') }}" alt="" class="h-32">
                    </a>
                    <div class="flex flex-wrap gap-4 justify-center items-center">
                        <span class="text-xl font-bold">320i</span>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Seat.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>TEMPAT DUDUK</span>
                                <span>3</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Suitcase.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>BAGASI</span>
                                <span>2</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Transmission.svg') }}" alt="" class="h-6">
                            <div class="flex-col flex">
                                <span>TRANSMISI</span>
                                <span>AUTOMATIC</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Fuel.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>BAHAN BAKAR</span>
                                <span>BENSIN</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Insurance.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>ASURANSI KENDARAAN</span>
                                <span>YES</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Driver.svg') }}" alt="" class="h-6">
                            <div class="flex-col flex">
                                <span>PENGEMUDI</span>
                                <span>YES</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- item 2 --}}
                <div class="text-smn text-text_desk w-365 flex-wrap flex items-center justify-center">
                    <img src="{{ asset('assets/MobilTest.svg') }}" alt="" class="h-32">
                    <div class="flex flex-wrap gap-4 justify-center items-center">
                        <span class="text-xl font-bold">320i</span>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Seat.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>TEMPAT DUDUK</span>
                                <span>3</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Suitcase.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>BAGASI</span>
                                <span>2</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Transmission.svg') }}" alt="" class="h-6">
                            <div class="flex-col flex">
                                <span>TRANSMISI</span>
                                <span>AUTOMATIC</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Fuel.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>BAHAN BAKAR</span>
                                <span>BENSIN</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Insurance.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>ASURANSI KENDARAAN</span>
                                <span>YES</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Driver.svg') }}" alt="" class="h-6">
                            <div class="flex-col flex">
                                <span>PENGEMUDI</span>
                                <span>YES</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- item 3 --}}
                <div class="text-smn text-text_desk w-365 flex-wrap flex items-center justify-center">
                    <img src="{{ asset('assets/MobilTest.svg') }}" alt="" class="h-32">
                    <div class="flex flex-wrap gap-4 justify-center items-center">
                        <span class="text-xl font-bold">320i</span>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Seat.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>TEMPAT DUDUK</span>
                                <span>3</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Suitcase.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>BAGASI</span>
                                <span>2</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Transmission.svg') }}" alt="" class="h-6">
                            <div class="flex-col flex">
                                <span>TRANSMISI</span>
                                <span>AUTOMATIC</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Fuel.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>BAHAN BAKAR</span>
                                <span>BENSIN</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Insurance.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>ASURANSI KENDARAAN</span>
                                <span>YES</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Driver.svg') }}" alt="" class="h-6">
                            <div class="flex-col flex">
                                <span>PENGEMUDI</span>
                                <span>YES</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- item 4 --}}
                <div class="text-smn text-text_desk w-365 flex-wrap flex items-center justify-center">
                    <img src="{{ asset('assets/MobilTest.svg') }}" alt="" class="h-32">
                    <div class="flex flex-wrap gap-4 justify-center items-center">
                        <span class="text-xl font-bold">320i</span>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Seat.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>TEMPAT DUDUK</span>
                                <span>3</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Suitcase.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>BAGASI</span>
                                <span>2</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Transmission.svg') }}" alt="" class="h-6">
                            <div class="flex-col flex">
                                <span>TRANSMISI</span>
                                <span>AUTOMATIC</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Fuel.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>BAHAN BAKAR</span>
                                <span>BENSIN</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Insurance.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>ASURANSI KENDARAAN</span>
                                <span>YES</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Driver.svg') }}" alt="" class="h-6">
                            <div class="flex-col flex">
                                <span>PENGEMUDI</span>
                                <span>YES</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- item 4 --}}
                <div class="text-smn text-text_desk w-365 flex-wrap flex items-center justify-center">
                    <img src="{{ asset('assets/MobilTest.svg') }}" alt="" class="h-32">
                    <div class="flex flex-wrap gap-4 justify-center items-center">
                        <span class="text-xl font-bold">320i</span>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Seat.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>TEMPAT DUDUK</span>
                                <span>3</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Suitcase.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>BAGASI</span>
                                <span>2</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Transmission.svg') }}" alt="" class="h-6">
                            <div class="flex-col flex">
                                <span>TRANSMISI</span>
                                <span>AUTOMATIC</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Fuel.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>BAHAN BAKAR</span>
                                <span>BENSIN</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Insurance.svg') }}" alt="" class="h-6">
                            <div class="flex flex-col">
                                <span>ASURANSI KENDARAAN</span>
                                <span>YES</span>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <img src="{{ asset('assets/Driver.svg') }}" alt="" class="h-6">
                            <div class="flex-col flex">
                                <span>PENGEMUDI</span>
                                <span>YES</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</body>

</html>
