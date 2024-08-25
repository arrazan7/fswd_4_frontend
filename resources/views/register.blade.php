<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <title>Register</title>
</head>

<body class="flex w-screen h-screen items-center justify-center font-poppins">
    <img src="http://127.0.0.1:8000/storage/web/bg_register.jpg"
        class="absolute brightness-50 h-full w-full object-cover -z-[2]" />
    <div class="absolute top-0 right-0 left-0 w-full h-16 z-[2] pt-4 px-20">
        <div class="flex justify-between">
            <a href="{{ route('home') }}"><svg data-v-05599172="" id="color" xmlns="http://www.w3.org/2000/svg"
                    height="40px" viewBox="0 0 145.55 39.37">
                    <g data-v-05599172="" fill="#ffffff" stroke="none">
                        <path data-v-05599172=""
                            d="M52.91,12.17h4.19V28.61h-4.19v-1.74c-.82,.77-1.64,1.32-2.46,1.65-.82,.34-1.72,.51-2.68,.51-2.16,0-4.02-.82-5.6-2.47-1.57-1.65-2.36-3.69-2.36-6.14s.76-4.62,2.29-6.24c1.52-1.62,3.37-2.43,5.55-2.43,1,0,1.94,.19,2.82,.56,.88,.37,1.69,.93,2.44,1.68v-1.81Zm-4.41,3.38c-1.3,0-2.37,.45-3.23,1.35-.86,.9-1.29,2.06-1.29,3.47s.44,2.59,1.31,3.51c.87,.92,1.95,1.37,3.22,1.37s2.41-.45,3.27-1.35c.87-.9,1.3-2.08,1.3-3.54s-.43-2.59-1.3-3.47c-.87-.89-1.96-1.33-3.29-1.33Z">
                        </path>
                        <path data-v-05599172=""
                            d="M66.24,8.25v4.02h2.84v3.2c-1.14,0-1.7,0-2.84,0v8.16c0,.6,.12,1.04,.35,1.3,.24,.26,.69,.39,1.35,.39,.49,0,.93-.03,1.3-.11v3.31c-.87,.26-1.77,.39-2.69,.39-3.11,0-4.7-1.55-4.76-4.64V15.47h-2.43v-3.2h2.43v-4.02h4.44Z">
                        </path>
                        <path data-v-05599172=""
                            d="M79.81,11.75c1.58,0,3.06,.39,4.44,1.16,1.39,.78,2.47,1.83,3.25,3.16,.78,1.33,1.17,2.76,1.17,4.31s-.39,3-1.17,4.35c-.78,1.35-1.85,2.41-3.2,3.17-1.35,.76-2.84,1.14-4.47,1.14-2.39,0-4.44-.84-6.13-2.52-1.69-1.68-2.54-3.71-2.54-6.11,0-2.57,.96-4.72,2.87-6.42,1.67-1.49,3.61-2.24,5.79-2.24Zm.07,3.88c-1.3,0-2.39,.45-3.25,1.34-.87,.89-1.3,2.03-1.3,3.42s.43,2.59,1.28,3.47c.86,.89,1.94,1.33,3.25,1.33s2.4-.45,3.28-1.34c.87-.9,1.31-2.05,1.31-3.46s-.43-2.56-1.28-3.44c-.86-.88-1.95-1.32-3.28-1.32Z">
                        </path>
                        <path data-v-05599172=""
                            d="M92.07,12.17h4.24v7.92c0,1.54,.11,2.61,.32,3.21,.22,.6,.56,1.07,1.04,1.4,.48,.33,1.06,.5,1.76,.5s1.29-.16,1.78-.49c.49-.33,.85-.81,1.09-1.44,.17-.47,.26-1.49,.26-3.04V12.17h4.19v6.96c0,2.87-.23,4.84-.69,5.89-.56,1.29-1.39,2.28-2.49,2.97-1.1,.69-2.49,1.04-4.18,1.04-1.83,0-3.31-.4-4.44-1.21-1.13-.81-1.92-1.94-2.39-3.37-.32-.99-.49-2.81-.49-5.44v-6.84Z">
                        </path>
                        <path data-v-05599172=""
                            d="M109.97,12.17h3.59v2.07c.39-.82,.91-1.44,1.55-1.86,.64-.42,1.35-.63,2.12-.63,.54,0,1.11,.14,1.7,.42-.52,1.42-.78,2.13-1.31,3.55-.49-.24-.9-.36-1.21-.36-.64,0-1.19,.39-1.63,1.18-.45,.79-.67,2.33-.67,4.62,0,.32,0,.48,.01,.8v6.65h-4.16V12.17Z">
                        </path>
                        <path data-v-05599172=""
                            d="M122.65,5.41c.73,0,1.36,.26,1.89,.79,.53,.52,.79,1.16,.79,1.9s-.26,1.36-.78,1.88c-.52,.52-1.14,.78-1.87,.78s-1.38-.26-1.91-.79c-.53-.53-.79-1.17-.79-1.93s.26-1.34,.78-1.86,1.15-.77,1.88-.77Zm-2.1,6.77h4.19V28.61h-4.19V12.17Z">
                        </path>
                        <path data-v-05599172=""
                            d="M128.55,12.17h4.19v1.68c.95-.79,1.81-1.34,2.58-1.65,.77-.31,1.56-.46,2.37-.46,1.66,0,3.07,.57,4.22,1.71,.97,.96,1.46,2.4,1.46,4.29v10.86h-4.15v-7.2c0-1.96-.09-3.26-.27-3.91-.18-.64-.49-1.13-.93-1.47-.44-.34-.99-.51-1.65-.51-.85,0-1.58,.28-2.18,.84-.61,.56-1.03,1.33-1.26,2.32-.12,.51-.18,1.62-.18,3.33v6.6h-4.19V12.17Z">
                        </path>
                    </g>
                    <g data-v-05599172="" fill="#ffffff" stroke="none">
                        <path data-v-05599172="" d="M26.46,24.67l-.02,.02c.39-.46,.75-.94,1.07-1.43l-1.06,1.41h0Z">
                        </path>
                        <path data-v-05599172=""
                            d="M15,0C6.73,0,0,6.73,0,15c0,3.11,.94,6.09,2.73,8.63,0,0,.01,.01,.02,.02l.02,.03,.47,.63,11.01,14.69c.18,.24,.45,.38,.75,.38h0c.3,0,.57-.14,.75-.38l10.69-14.3,.02-.02,1.06-1.41s0,0,0-.02c.02-.02,.03-.04,.04-.07,1.57-2.42,2.43-5.26,2.43-8.18,0-8.27-6.73-15-15-15Zm0,18.75c-2.07,0-3.75-1.68-3.75-3.75s1.68-3.75,3.75-3.75,3.75,1.68,3.75,3.75-1.68,3.75-3.75,3.75Zm11,3.41c-.3,.46-.64,.91-1,1.34-.01,.02-.03,.03-.04,.05l-9.02,12.06v-15.07s.08-.01,.12-.02c.08-.02,.16-.03,.24-.05,.16-.04,.32-.08,.47-.13,.04-.01,.08-.03,.12-.04,.04-.01,.08-.03,.11-.04,.04-.01,.08-.03,.11-.05,.04-.02,.08-.03,.11-.05,.04-.02,.07-.03,.11-.05,.04-.02,.09-.04,.13-.06,.07-.03,.14-.07,.2-.1,.14-.08,.28-.16,.42-.25,.04-.02,.07-.05,.1-.07,.03-.02,.06-.05,.09-.07,.03-.02,.07-.05,.1-.08,.03-.02,.06-.05,.09-.07,.09-.08,.19-.15,.28-.23,.03-.02,.05-.05,.08-.07,.08-.08,.16-.16,.24-.24,.02-.03,.05-.05,.07-.08,.07-.07,.13-.15,.19-.22,.05-.06,.09-.12,.14-.18,.13-.17,.24-.34,.35-.52,.02-.03,.04-.07,.06-.1,.02-.04,.04-.07,.06-.11,.06-.11,.11-.22,.16-.33,.02-.04,.03-.08,.05-.11s.03-.08,.05-.11c.01-.03,.03-.07,.04-.1,.04-.09,.07-.19,.1-.28,0-.03,.02-.06,.03-.09,.01-.04,.02-.08,.04-.12,.05-.16,.08-.32,.11-.49,0-.04,.01-.08,.02-.12h0s.01-.09,.02-.13h0s0-.08,.01-.12c0-.04,0-.07,.01-.11,0-.04,0-.08,0-.11,0-.05,0-.09,0-.14,0-.03,0-.07,0-.1,0-.06,0-.12,0-.19,0-3.1-2.52-5.62-5.62-5.62s-5.62,2.52-5.62,5.62c0,.06,0,.12,0,.19,0,.03,0,.07,0,.1,0,.05,0,.09,0,.14,0,.04,0,.08,0,.11v.11s.02,.08,.03,.11h0s.01,.08,.02,.12h0s.01,.09,.02,.13c.03,.17,.07,.33,.11,.49,.01,.04,.02,.08,.04,.12,0,.03,.02,.06,.03,.09,.03,.09,.06,.19,.1,.28,.01,.03,.03,.07,.04,.1,.02,.04,.03,.08,.05,.11s.03,.08,.05,.11c.05,.11,.1,.22,.16,.33,.02,.04,.04,.07,.06,.11s.04,.07,.06,.1c.11,.18,.22,.36,.35,.52,.05,.06,.09,.12,.14,.18,.06,.08,.13,.15,.19,.22,.02,.03,.05,.05,.07,.08,.08,.08,.16,.16,.24,.24,.03,.02,.05,.05,.08,.07,.09,.08,.18,.16,.28,.23,.03,.02,.06,.05,.09,.07,.03,.03,.07,.05,.1,.08,.03,.02,.06,.05,.09,.07,.04,.02,.07,.05,.1,.07,.13,.09,.27,.17,.42,.25,.07,.04,.13,.07,.2,.1,.04,.02,.08,.04,.13,.06,.04,.02,.07,.03,.11,.05,.04,.02,.08,.03,.11,.05,.04,.02,.08,.03,.11,.05,.04,.02,.08,.03,.11,.04,.04,.02,.08,.03,.12,.04,.15,.05,.31,.1,.47,.13,.08,.02,.16,.04,.24,.05,.04,0,.08,.02,.12,.02v15.07L4.76,23.21l-.02-.03-.49-.65h0c-1.55-2.21-2.38-4.82-2.38-7.54,0-7.24,5.88-13.13,13.12-13.13s13.12,5.89,13.12,13.12c0,2.56-.75,5.05-2.13,7.16h0Z">
                        </path>
                    </g>
                </svg>
            </a>
            <div class="flex justify-end items-center">
                <a class="flex items-center mr-14" href="https://atourin.com/explore/itinerary" target="_blank">
                    <svg data-v-05599172="" data-v-1bc1d2a6="" width="26" height="26" viewBox="0 0 26 26"
                        fill="none" xmlns="http://www.w3.org/2000/svg" class="menu-icon">
                        <title data-v-05599172="">Explore</title>
                        <path data-v-05599172="" data-v-1bc1d2a6=""
                            d="M17.6688 6.59445L10.3391 9.94449C9.98457 10.1065 9.70028 10.3908 9.53824 10.7453L6.1882 18.0751C5.80176 18.9206 6.67266 19.792 7.51867 19.4055L14.8484 16.0555C15.2029 15.8935 15.4872 15.6092 15.6493 15.2547L18.9993 7.92492C19.3857 7.07891 18.5148 6.20801 17.6688 6.59445ZM13.7404 14.1466C13.1071 14.7799 12.0804 14.7799 11.4471 14.1466C10.8139 13.5134 10.8139 12.4866 11.4471 11.8534C12.0804 11.2201 13.1071 11.2201 13.7404 11.8534C14.3736 12.4866 14.3736 13.5134 13.7404 14.1466ZM12.5938 0.40625C5.63824 0.40625 0 6.04449 0 13C0 19.9555 5.63824 25.5938 12.5938 25.5938C19.5493 25.5938 25.1875 19.9555 25.1875 13C25.1875 6.04449 19.5493 0.40625 12.5938 0.40625ZM12.5938 23.1562C6.99359 23.1562 2.4375 18.6002 2.4375 13C2.4375 7.39984 6.99359 2.84375 12.5938 2.84375C18.1939 2.84375 22.75 7.39984 22.75 13C22.75 18.6002 18.1939 23.1562 12.5938 23.1562Z"
                            fill="#ffffff" stroke-width="0"></path>
                    </svg>
                    <span class="text-white font-semibold ml-2">Destinasi</span>
                </a>
                <a class="flex items-center mr-14" href="https://atourin.com/itinerary-editor" target="_blank">
                    <svg data-v-05599172="" id="Layer_1" data-v-1bc1d2a6=""
                        enable-background="new 0 0 512.097 512.097" height="25" viewBox="0 0 512.097 512.097"
                        width="23" xmlns="http://www.w3.org/2000/svg" class="menu-icon">
                        <title data-v-05599172="">Planner</title>
                        <path data-v-05599172="" data-v-1bc1d2a6=""
                            d="m181.899 512.097c-16.701 0-33.302-3.224-48.938-9.583l-64.351-26.17c-41.65-16.938-68.562-56.934-68.562-101.896v-291.378c0-27.672 13.707-53.415 36.665-68.863 22.96-15.448 51.97-18.446 77.602-8.022.047.019.095.039.142.058l57.564 23.925s134.907-28.068 135.083-28.1c24.272-4.375 49.184-1.777 72.031 7.516l64.351 26.169c41.65 16.938 68.562 56.935 68.562 101.896v162.443c-1.056 26.536-38.953 26.516-40 0v-162.443c0-28.612-17.126-54.064-43.631-64.843l-64.351-26.169c-15.739-6.4-32.891-8.214-49.615-5.248l-140.328 29.198c-3.938.82-8.033.433-11.75-1.112l-63.192-26.265c-27.591-11.772-59.693 9.869-59.132 39.86v291.379c0 28.612 17.126 54.065 43.631 64.843l64.351 26.17c15.737 6.399 32.883 8.211 49.609 5.249l88.323-18.431c10.818-2.256 21.408 4.68 23.664 15.493 2.257 10.812-4.68 21.407-15.492 23.664l-88.604 18.49c-.18.038-.358.072-.538.105-7.663 1.379-15.39 2.065-23.094 2.065zm308.768-21.387c28.321-27.172 28.319-76.065.001-103.237l-59.11-60.109c-20.263-20.262-47.825-34.942-75.925-40.559l-56.664-11.326c-6.556-1.308-13.334.742-18.062 5.47s-6.78 11.506-5.47 18.062l11.326 56.664c5.616 28.1 19.295 53.663 39.558 73.926l61.109 61.109c13.788 13.788 32.12 21.381 51.619 21.381 19.498 0 37.83-7.593 51.618-21.381zm-142.874-164.682c20.328 4.064 38.821 13.96 53.48 28.619l61.11 61.109c12.801 12.284 12.802 34.385 0 46.668-12.283 12.802-34.386 12.803-46.669 0l-61.11-61.11c-14.659-14.659-24.555-33.152-28.617-53.48l-5.448-27.253zm-9.744-79.936c-11.046 0-20-8.954-20-20v-126c1.056-26.536 38.953-26.516 40 0v126c0 11.045-8.954 20-20 20zm-144 165.914v-283c-1.056-26.536-38.953-26.516-40 0v283c0 11.046 8.954 20 20 20s20-8.954 20-20z"
                            fill="#ffffff"></path>
                    </svg>

                    <span class="text-white font-semibold ml-2">Custom</span>
                </a>
                <button
                    class="text-white border border-white rounded-xl px-3 py-2 hover:bg-purple-500 hover:border-purple-500">
                    Masuk
                </button>
            </div>
        </div>
    </div>
    <div class="flex justify-between w-9/12 h-5/6 px-6 mt-5">
        <div class="flex flex-col justify-center w-7/12 h-full pr-20">
            <p class="text-4xl text-yellow-300 font-semibold mb-5">
                Berwisata dengan Atourin
            </p>
            <p class="text-lg text-white mb-5">
                Gabung di Atourin dan nikmati semua fitur mudahnya!
            </p>
            <div class="flex flex-col">
                <div class="flex mb-5">
                    <img src="http://127.0.0.1:8000/storage/web/marketplace.png" class="w-20 h-20 mr-5" />
                    <div>
                        <p class="text-base text-white font-semibold">
                            Marketplace Produk Desa Wisata
                        </p>
                        <p class="text-base text-white">
                            Rasakan experience baru dalam berwisata dan
                            kearifan lokal di desa wisata Indonesia.
                        </p>
                    </div>
                </div>
                <div class="flex mb-5">
                    <img src="http://127.0.0.1:8000/storage/web/objek_wisata.png" class="w-20 h-20 mr-5" />
                    <div>
                        <p class="text-base text-white font-semibold">
                            Trip Planner Indonesia Terlengkap
                        </p>
                        <p class="text-base text-white">
                            Ribuan informasi obyek wisata dan ratusan
                            referensi rencana perjalanan untuk kamu.
                        </p>
                    </div>
                </div>
                <div class="flex mb-5">
                    <img src="http://127.0.0.1:8000/storage/web/coin.png" class="w-20 h-20 mr-5" />
                    <div>
                        <p class="text-base text-white font-semibold">
                            Dapatkan Penghasilan Tambahan
                        </p>
                        <p class="text-base text-white">
                            Kontribusi kamu akan diapresiasi melalui
                            akumulasi poin yang bisa ditukarkan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-5/12 h-full border rounded-xl shadow-md overflow-hidden">
            <div class="h-full bg-white p-10">
                <p class="text-2xl font-semibold text-center text-slate-800 mb-10">
                    Daftar Akun
                </p>
                @if (Session::has('success'))
                    <p
                        class="text-center text-lg text-green-500 bg-green-200 border border-green-400 rounded-lg py-2 px-3 mb-5 -mt-5">
                        {{ Session::get('success') }}
                    </p>
                @endif

                @if (Session::has('error'))
                    <p
                        class="text-center text-lg text-pink-500 bg-pink-200 border border-pink-400 rounded-lg py-2 px-3 mb-5 -mt-5">
                        {{ Session::get('error') }}
                    </p>
                @endif
                <form action="{{ route('register_account') }}" method="POST">
                    @csrf
                    <label for="fullname" class="block mb-4">
                        <span class="text-base text-slate-500">Nama Lengkap:</span>
                        <input type="text" id="fullname" name="fullname"
                            class="block w-full text-base text-slate-800 focus:outline-none border-b border-slate-500 invalid:text-pink-700" />
                        @error('fullname')
                            <p class="text-xs text-pink-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <label for="username" class="block mb-4">
                        <span class="text-base text-slate-500">Username:</span>
                        <input type="text" id="username" name="username"
                            class="block w-full text-base text-slate-800 focus:outline-none border-b border-slate-500 invalid:text-pink-700" />
                        @error('username')
                            <p class="text-xs text-pink-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <label for="email" class="block mb-4">
                        <span class="text-base text-slate-500">Email:</span>
                        <input type="email" id="email" name="email"
                            class="block w-full text-base text-slate-800 focus:outline-none border-b border-slate-500 invalid:text-pink-700" />
                        @error('email')
                            <p class="text-xs text-pink-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <label for="password" class="block mb-4">
                        <span class="text-base text-slate-500">Password:</span>
                        <input type="password" id="password" name="password"
                            class="block w-full text-base text-slate-800 focus:outline-none border-b border-slate-500 invalid:text-pink-700" />
                        @error('password')
                            <p class="text-xs text-pink-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <label for="password_confirmation" class="block mb-4">
                        <span class="text-base text-slate-500">Konfirmasi Password:</span>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="block w-full text-base text-slate-800 focus:outline-none border-b border-slate-500 invalid:text-pink-700" />
                        @error('password_confirmation')
                            <p class="text-xs text-pink-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <p class="mb-4 text-sm text-center text-slate-800">
                        Dengan melakukan pendaftaran, saya setuju dengan
                        <span class="text-purple-500"><a href="https://atourin.com/terms" target="_blank">Syarat &
                                Ketentuan</a></span>
                        dan
                        <span class="text-purple-500"><a href="https://atourin.com/privacy" target="_blank">Kebijakan
                                Privasi</a></span>
                        Atourin
                    </p>
                    <input type="submit" value="Daftar"
                        class="block w-full p-2 text-base font-semibold text-center text-white bg-purple-500 rounded-xl cursor-pointer" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>
