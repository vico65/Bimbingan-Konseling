<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Login</title>
</head>

<body class="font-poppins">

    <div class="flex items-center justify-center h-screen bg-rose-300">
        <div class="container  w-3/4 bg-white  m-auto shadow-2xl mt-10 rounded-xl">
            <div class="grid sm:grid-cols-2 h-full">
                {{-- gambar --}}
                <div class="bg-slate-50 rounded-tl-xl rounded-bl-xl overflow-hidden">
                    <img class="mask-t-from-75% mask-radial-at-left" src="{{ asset('images/sma-placeholder.jpg') }}"
                        alt="gambar-sma-placeholder">
                </div>

                {{-- form --}}
                <div class="px-8 py-2 ">

                    {{-- logo sekolah --}}
                    <div class="pt-5 mb-5 flex gap-2 w-[35%]">
                        <img class="w-11 h-11" src="{{ asset('images/sma-logo.png') }}" alt="logo-sma">
                        <h3 class="text-sm">SMA Negeri <span class="text-rose-500">0</span> Palembang</h3>
                    </div>

                    {{-- caption dan judul login --}}
                    <div class="mb-5">
                        <h2 class="font-semibold text-2xl ">Selamat Datang</h2>
                        <p class="text-rose-400 text-[13px] font-normal">Setiap Langkahmu Berarti. Kami Siap Membimbing.
                        </p>
                    </div>

                    {{-- form --}}
                    <form action="">
                        {{-- input nip / nisn --}}
                        <div
                            class="mt-2 border-2 border-gray-300 text-gray-500 rounded-lg focus-within:border-rose-500 px-3 py-2 flex gap-2">
                            <div class="">
                                <svg width="24" height="24" fill="none" stroke="currentColor"
                                    stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round"
                                    stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                    <path d='M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0' />
                                    <path
                                        d='M14.5 9.25a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0M17 19.5c-.317-6.187-9.683-6.187-10 0' />
                                </svg>
                            </div>
                            <input type="text" id="nik" name="id" placeholder="Masukkan NIP/NISN mu"
                                class="w-full border-none focus:outline-none focus:ring-0 bg-transparent placeholder:text-gray-500 placeholder" />
                        </div>

                        {{-- input password --}}
                        <div
                            class="mb-4 mt-2 border-2 border-gray-300 text-gray-500 rounded-lg focus-within:border-rose-500 px-3 py-2 flex gap-2">
                            <div class="">
                                <svg width="28" height="28" fill="none" stroke="currentColor"
                                    stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round"
                                    stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d='M8 10V8c0-2.761 1.239-5 4-5s4 2.239 4 5v2M3.5 17.8v-4.6c0-1.12 0-1.68.218-2.107a2 2 0 0 1 .874-.875c.428-.217.988-.217 2.108-.217h10.6c1.12 0 1.68 0 2.108.217a2 2 0 0 1 .874.874c.218.428.218.988.218 2.108v4.6c0 1.12 0 1.68-.218 2.108a2 2 0 0 1-.874.874C18.98 21 18.42 21 17.3 21H6.7c-1.12 0-1.68 0-2.108-.218a2 2 0 0 1-.874-.874C3.5 19.481 3.5 18.921 3.5 17.8' />
                                </svg>
                            </div>
                            <input type="text" id="nik" name="id" placeholder="Masukkan NIP/NISN mu"
                                class="w-full border-none focus:outline-none focus:ring-0 bg-transparent placeholder:text-gray-500" />
                        </div>

                        <div class="flex justify-between text-xs mb-5">
                            {{-- ingat saya checkbox --}}
                            <div class="">
                                <input type="checkbox" name="remember_me" id="">
                                <label for="remember_me">Ingat saya</label>
                            </div>

                            {{-- Link lupa password --}}
                            <div class="">
                                <a href="lupa_pasword.php">Lupa Password?</a>
                            </div>
                        </div>

                        {{-- tombol submit --}}
                        <div class="w-full mb-5">
                            <button type="submit" class="bg-rose-500 w-full py-2 px-3 text-white shadow-md rounded-lg">
                                Masuk
                            </button>
                        </div>


                    </form>


                </div>
            </div>

        </div>
    </div>
</body>

<script src="resources\ts\halo.ts"></script>

</html>
