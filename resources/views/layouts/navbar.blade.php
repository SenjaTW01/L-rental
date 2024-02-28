<nav class=" font-poppins bg-nav_color text-font_color_primary flex justify-between px-10 pt-4 pb-5">
    <link rel="stylesheet" href="{{ asset('css/pluss.css') }}">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <div class="">
        <div class="flex gap-6">
            <div class="flex items-center gap-3">
                <div class="img-con w-10">
                    <img src="{{ asset('assets/Logo.jpg') }}" alt="" class="w-full">
                </div>
                <div class="">
                    <a class="text-2xl font-medium">L- Rent</a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex gap-8 items-center">
        <button></button>
        <button></button>
        <button></button>
        <div class="flex items-center gap-3 border px-3 py-1 rounded-lg transition-all ease-in-out duration-500 ">
            <button class="w-5">
                <img src="{{ asset('assets/search.svg') }}" alt="" class="w-full">
            </button>
            <div class="transition-all ease-in-out duration-500">
                <input type="text" name="" id="" placeholder="Search"
                    class="placeholder:text-sm text-sm ps-4 inp-nv-nav focus:w-96 transition-all ease-in-out duration-500">
            </div>
        </div>


        <div class="flex items-center gap-3">
            <button class="w-6">
                <img src="{{ asset('assets/circle-user.svg') }}" alt="" class="w-full">
            </button>
            <div class="">
                <a class="font-medium">Login</a>
            </div>
        </div>

        <div class="flex items-center gap-2">
            <button class="w-5">
                <img src="{{ asset('assets/user-add.svg') }}" alt="" class="w-full">
            </button>
            <a class="font-medium">Register</a>
        </div>

        <button class="text-2xl text-font_color_primary" onclick="sidebar()">
            <i class="bi bi-list"></i>
        </button>

        <section id="sidebar" class="fixed right-0 top-0 text-primary hidden">
            <div class="w-365 bg-font_color_primary p-5 h-screen container">
                <div class="flex justify-start">
                    <button class="text-2xl" onclick="sidebar()">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
                <div class="flex flex-col justify-center items-center content h-full">
                    <!-- Menambahkan class h-full -->
                    <div class="flex items-center gap-5 h-10 mb-2 hover:bg-white w-full justify-center border-b-2 ">
                        <a href="" class="">Whislist</a>
                        <button class="w-6">
                            <img src="{{ asset('assets/shopping-cart.png') }}" alt="" class="w-full ">
                        </button>
                    </div>
                    <div class="flex items-center gap-5 h-10 mb-2 hover:bg-white w-full justify-center border-b-2 ">
                        <a href="" class="">Whislist</a>
                        <button class="w-6">
                            <img src="{{ asset('assets/shopping-cart.png') }}" alt="" class="w-full ">
                        </button>
                    </div>
                    <div class="flex items-center gap-5 h-10 mb-2 hover:bg-white w-full justify-center border-b-2 ">
                        <a href="" class="">Whislist</a>
                        <button class="w-6">
                            <img src="{{ asset('assets/shopping-cart.png') }}" alt="" class="w-full ">
                        </button>
                    </div>
                </div>
            </div>
        </section>

    </div>
</nav>




<script>
    const sidebar = () => {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('hidden');
    }
</script>
