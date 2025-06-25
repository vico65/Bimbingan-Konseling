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
        <div class="container  w-[80%] bg-white  m-auto shadow-2xl mt-24 rounded-xl">
            <div class="flex h-full">
                {{-- gambar --}}
                <div class="bg-slate-50 rounded-tl-xl rounded-bl-xl overflow-hidden w-[56%] relative">
                    {{-- gambar overlay --}}
                    {{-- gambar placeholder --}}
                    <img class="mask-t-from-75% mask-radial-at-left h-full w-full" src="{{ asset('images/sma-placeholder.jpg') }}"
                        alt="gambar-sma-placeholder">
                </div>

                {{-- form --}}
                <div class="px-8 py-2 w-[44%]">

                    {{-- logo sekolah --}}
                    <div class="pt-5 mb-5 flex gap-2 w-[40%] ">
                        <img class="w-9 h-9" src="{{ asset('images/sma-logo.png') }}" alt="logo-sma">
                        <h3 class="text-xs">SMA Negeri <span class="text-rose-500">0</span> Palembang</h3>
                    </div>

                    {{-- caption dan judul login --}}
                    <div class="mb-7">
                        <h2 class="font-semibold text-1.5px text-slate-700 ">Selamat Datang</h2>
                        <p class="text-rose-400/90 text-[12px] font-[500]">Setiap Langkahmu Berarti. Kami Siap Membimbing.
                        </p>
                    </div>

                    {{-- form --}}
                    <form action="">
                        {{-- input nip / nisn --}}
                        <div
                            class="mt-2 border-2 border-gray-200 text-gray-500/80 rounded-xl focus-within:border-rose-500 px-3 py-2 flex gap-2">
                            <div class="">
                                <svg width="24" height="24" fill="none" stroke="currentColor"
                                    stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round"
                                    stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                    <path d='M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0' />
                                    <path
                                        d='M14.5 9.25a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0M17 19.5c-.317-6.187-9.683-6.187-10 0' />
                                </svg>
                            </div>
                            <input type="text" id="nik" name="id" placeholder="Masukkan NIP/NISN anda"
                                class="w-full border-none focus:outline-none focus:ring-0 bg-transparent placeholder:text-gray-500/80 placeholder:text-sm placeholder:tracking-wider placeholder:font-normal" />
                        </div>

                        {{-- input password --}}
                        <div
                            class="mt-2 mb-5 border-2 border-gray-200 text-gray-500/80 rounded-xl focus-within:border-rose-500 px-3 py-2 flex gap-2">
                            <div class="">
                                <svg width="28" height="28" fill="none" stroke="currentColor"
                                    stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round"
                                    stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d='M8 10V8c0-2.761 1.239-5 4-5s4 2.239 4 5v2M3.5 17.8v-4.6c0-1.12 0-1.68.218-2.107a2 2 0 0 1 .874-.875c.428-.217.988-.217 2.108-.217h10.6c1.12 0 1.68 0 2.108.217a2 2 0 0 1 .874.874c.218.428.218.988.218 2.108v4.6c0 1.12 0 1.68-.218 2.108a2 2 0 0 1-.874.874C18.98 21 18.42 21 17.3 21H6.7c-1.12 0-1.68 0-2.108-.218a2 2 0 0 1-.874-.874C3.5 19.481 3.5 18.921 3.5 17.8' />
                                </svg>
                            </div>
                            <input type="text" id="nik" name="id" placeholder="Masukkan NIP/NISN anda"
                                class="w-full border-none focus:outline-none focus:ring-0 bg-transparent placeholder:text-gray-500/80 placeholder:text-sm placeholder:tracking-wider placeholder:font-normal" />
                        </div>

                    

                        <div class="flex justify-between text-xs mb-7 px-1 text-slate-700">
                            {{-- ingat saya checkbox --}}
                            <div class="flex gap-1">
                                <input type="checkbox" name="remember_me" id="remember_me" class="cursor-pointer peer  accent-rose-500 " >
                                <label for="remember_me" class=" peer-checked:text-rose-500">Ingat saya</label>
                            </div>

                            {{-- Link lupa password --}}
                            <div class="">
                                <a href="lupa_pasword.php" class="text-blue-500 underline underline-offset-2">Lupa Password?</a>
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
