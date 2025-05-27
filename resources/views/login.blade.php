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
                    <img class="mask-t-from-75% mask-radial-at-left" src="{{ asset('images/sma-placeholder.jpg') }}" alt="gambar-sma-placeholder">
                </div>

                {{-- form --}}
                <div class="px-3 py-2">
                    <h2 class="font-semibold text-2xl ">Selamat Datang</h2>
    
                    <div class="mb-4 mt-5 border-2 border-rose-400 rounded-lg focus-within:border-rose-500 ">
                        <label for="id" class="text-slate-900 font-light ">
                            <input type="text" id="nik" name="id" placeholder="Masukan NIP/NISN mu"
                                class="w-full px-3 py-2 border-none focus:outline-none focus:ring-0 bg-transparent" />
                        </label>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</body>

<script src="resources\ts\halo.ts">

</script>

</html>
