<link rel="stylesheet" href="{{ asset('css/pluss.css') }}">

<section
    class="fixed left-0 top-56 w-16  flex flex-col gap-2 bg-slate-900 rounded-tl-none rounded-bl-none rounded-2xl hover:w-52 side-nv-container text-white">
    <div class="flex items-center gap-5 hover:bg-slate-500 rounded-tr-2xl h-10 px-3">
        <button class="w-6">
            <img src="{{ asset('assets/shopping-cart.png') }}" alt="" class="w-full ">
        </button>
        <a href="" class="side-nv-txt">Whislist</a>
    </div>
    <div class="flex items-center gap-5 hover:bg-slate-500 h-10 px-3">
        <button class="w-6">
            <img src="{{ asset('assets/bell.png') }}" alt="" class="w-full">
        </button>
        <a href="" class="side-nv-txt">Notifikasi</a>
    </div>
    <div class="flex items-center gap-5 hover:bg-slate-500 h-10 px-3 rounded-br-2xl">
        <button class="w-6">
            <img src="{{ asset('assets/envelope.png') }}" alt="" class="w-full">
        </button>
        <a href="" class="side-nv-txt">Email</a>
    </div>
</section>
