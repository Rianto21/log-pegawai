<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log Harian</title>
  @vite('resources/css/app.css')

</head>

<body>
  <x-navbar />
  <x-flash-message url="/log-harian/verifikasi/{{ $data->id_pegawai }}" />

  <div class="container mx-auto mt-8">
    <h1 class="text-4xl font-righteous text-yellow-600 text-center">Daftar Log Harian Karyawan</h1>
    <p class="text-center font-roboto font-semibold text-lg text-neutral-600">{{ $data->nama_pegawai }}</p>

    <table class="min-w-full border border-neutral-600 mb-20 mt-8">
      <thead>
        <tr>
          <th class="px-4 py-2 text-white bg-neutral-600 w-[8rem]">Date</th>
          <th class="px-4 py-2 text-white bg-neutral-600">Title</th>
          <th class="px-4 py-2 text-white bg-neutral-600">Body</th>
          <th class="px-4 py-2 text-white bg-neutral-600">Status</th>
          <th class="px-4 py-2 text-white bg-neutral-600">Foto</th>
          <th class="px-4 py-2 text-white bg-neutral-600">Action</th>
          <!-- Add more table headers as needed -->
        </tr>
      </thead>
      <tbody>
        @foreach ($data->log_harian as $log)
          <tr>
            <td class="px-4 py-2 border-neutral-400 border">{{ $log->tanggal }}</td>
            <td class="px-4 py-2 border-neutral-400 border">{{ $log->title }}</td>
            <td class="px-4 py-2 border-neutral-400 border">{{ $log->body }}</td>
            <td class="px-4 py-2 border-neutral-400 border">
              {{ $log->status == 1 ? 'Pending' : '' }}{{ $log->status == 2 ? 'Disetujui' : '' }}{{ $log->status == 3 ? 'Ditolak' : '' }}</td>
            <td class="px-4 py-2 border-neutral-400 border">
              <button onclick="showPictureModal('{{ $log->foto }}', 'Log Tanggal {{ $log->tanggal }}' )"
                {{ empty($log->foto) ? 'disabled' : '' }}>
                <img class="w-8 h-8 hover:shadow-md cursor-pointer duration-200" src="/img.svg" alt="">
              </button>
              {{-- {{ $log->foto }} --}}
            </td>
            <td class="px-4 py-2 border-neutral-400 border">
              <div class="rounded-full flex ">
                <form method="POST" action="{{ route('log_harian.verifikasi_post') }}">
                  @csrf
                  <input id="id_log_harian" type="number" name="id_log_harian" value="{{ $log->id_log_harian }}"
                    class=" hidden outline-none border border-teal-600">
                  <input id="status" type="number" name="status" value="2" class=" hidden outline-none border border-teal-600">
                  <button type="submit"
                    class="bg-yellow-600 hover:bg-yellow-400 duration-200 cursor-pointer w-16 text-center font-roboto rounded-l-full py-1 text-white">
                    Setujui</button>
                </form>
                <form method="POST" action="{{ route('log_harian.verifikasi_post') }}">
                  @csrf
                  <input id="id_log_harian" type="number" name="id_log_harian" value="{{ $log->id_log_harian }}"
                    class=" hidden outline-none border border-teal-600">
                  <input id="status" type="number" name="status" value="3" class=" hidden outline-none border border-teal-600">
                  <button type="submit"
                    class="bg-red-600 hover:bg-red-400 duration-200 cursor-pointer w-16 text-center font-roboto rounded-r-full py-1 text-white">Tolak</button>
                </form>

              </div>
            </td>
            <!-- Add more table cells for other attributes -->
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>
