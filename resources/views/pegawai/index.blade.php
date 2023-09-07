<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pegawai</title>
  @vite('resources/css/app.css')

</head>

<body>
  <x-navbar />
  <x-flash-message url="/log-harian" />
  <div class="container mx-auto mt-8">
    <h1 class="text-4xl font-righteous text-yellow-600 mb-4 text-center">Daftar Karyawan {{ $daftar_pegawai[0]->dinas->nama_dinas }}</h1>
    <table class="min-w-full border border-neutral-600 mb-20">
      <thead>
        <tr>
          <th class="px-4 py-2 text-white bg-neutral-600 ">Nama</th>
          <th class="px-4 py-2 text-white bg-neutral-600">Email</th>
          <th class="px-4 py-2 text-white bg-neutral-600">Bagian</th>
          <th class="px-4 py-2 text-white bg-neutral-600">Jabatan</th>
          <!-- Add more table headers as needed -->
        </tr>
      </thead>
      <tbody>
        @foreach ($daftar_pegawai as $pegawai)
          <tr>
            <td class="px-4 py-2 border-neutral-400 border">{{ $pegawai->nama_pegawai }}</td>
            <td class="px-4 py-2 border-neutral-400 border">{{ $pegawai->email }}</td>
            <td class="px-4 py-2 border-neutral-400 border">{{ $pegawai->bagian->nama_bagian }}</td>
            <td class="px-4 py-2 border-neutral-400 border">{{ $pegawai->jabatan_method->nama_jabatan }}</td>

            <!-- Add more table cells for other attributes -->
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>
