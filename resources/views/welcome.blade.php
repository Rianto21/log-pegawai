<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Log Harian</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  @vite('resources/css/app.css')

</head>

<body class="antialiased font-roboto">
  <x-navbar />
  <x-flash-message url="/login" />
  <h2 class="text-center font-righteous text-3xl text-yellow-600 my-4">Selamat Bekerja {{ auth('pegawai')->user()->nama_pegawai }}</h2>
  <div class="flex items-center justify-center gap-4 mt-12">
    <a href="/daftar-pegawai"
      class="bg-white rounded-lg shadow-md flex flex-col items-center justify-center w-48 cursor-pointer p-2 duration-200 hover:shadow-lg">
      <h4 class="text-lg font-roboto font-medium text-blue-600">Pegawai</h4>
      <p class="text-sm text-neutral-700 font-light text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi qui itaque, nulla
        reprehenderit
        ratione facilis.
      </p>
    </a>
    <a href="/log-harian"
      class="bg-white rounded-lg shadow-md flex flex-col items-center justify-center w-48 cursor-pointer p-2 duration-200 hover:shadow-lg">
      <h4 class="text-lg font-roboto font-medium text-blue-600">Log Harian</h4>
      <p class="text-sm text-neutral-700 font-light text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi qui itaque, nulla
        reprehenderit
        ratione facilis.
      </p>
    </a>
  </div>
</body>

</html>
