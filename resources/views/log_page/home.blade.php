<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log Harian</title>
  @vite('resources/css/app.css')

  <script>
    function showPictureModal(urlFoto, Judul) {
      document.getElementById("modal-show-picture").classList.remove('hidden')
      document.getElementById("modal-show-picture-judul").innerText = Judul
      document.getElementById("modal-show-picture-picture").src = urlFoto
    }

    function hidePictureModal() {
      document.getElementById("modal-show-picture").classList.add('hidden')
      document.getElementById("modal-show-picture-judul").innerText = ""
      document.getElementById("modal-show-picture-picture").src = ""
    }

    function showDeleteModal(link) {
      document.getElementById("modal-delete-data").classList.remove("hidden")
      document.getElementById("modal-delete-data-link").href = `${link}`
      document.getElementById("modal-delete-data-main").scrollIntoView({
        behavior: 'smooth',
        block: 'start',
        inline: 'nearest'
      });
      window.scrollBy(0, -200);
    }

    function hideDeleteModal() {
      document.getElementById("modal-delete-data").classList.add("hidden")
      document.getElementById("modal-delete-data-link").href = "/"
    }
  </script>
</head>

<body>
  <x-navbar />
  <x-flash-message url="/log-harian" />

  {{-- HIDDEN MODAL --}}
  <x-modal-show-picture />
  <x-modal-delete-data />


  <div class="container mx-auto mt-8">
    <h1 class="text-4xl font-righteous text-yellow-600 mb-4 text-center">Daftar Log Harian</h1>
    <div class="text-center my-4">
      <a href="/log-harian/tambah"
        class="text-center font-roboto text-white bg-emerald-600 hover:bg-white hover:text-emerald-600 hover:shadow-md hover:shadow-emerald-600/40 py-2 px-6 rounded-full duration-200">Tambahkan
        Log Harian</a>
    </div>

    <table class="min-w-full border border-neutral-600 mb-20">
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
        @foreach ($daftar_log_harian as $log)
          <tr>
            <td class="px-4 py-2 border-neutral-400 border">{{ $log->tanggal }}</td>
            <td class="px-4 py-2 border-neutral-400 border">{{ $log->title }}</td>
            <td class="px-4 py-2 border-neutral-400 border">{{ $log->body }}</td>
            <td class="px-4 py-2 border-neutral-400 border">
              {{ $log->status == 1 ? 'Pending' : '' }}{{ $log->status == 2 ? 'Disetujui' : '' }}{{ $log->status == 3 ? 'Ditolak' : '' }}</td>
            <td class="px-4 py-2 border-neutral-400 border">
              <button onclick="showPictureModal('{{ $log->foto }}', 'Log Tanggal {{ $log->tanggal }}' )" {{ empty($log->foto) ? 'disabled' : '' }}>
                <img class="w-8 h-8 hover:shadow-md cursor-pointer duration-200" src="/img.svg" alt="">
              </button>
              {{-- {{ $log->foto }} --}}
            </td>
            <td class="px-4 py-2 border-neutral-400 border">
              <div class="rounded-full flex ">
                <a href="/log-harian/edit/{{ $log->id_log_harian }}"
                  class="bg-yellow-600 hover:bg-yellow-400 duration-200 cursor-pointer w-16 text-center font-roboto rounded-l-full py-1 text-white">Edit</a>
                <button onclick="showDeleteModal('{{ '/log-harian/hapus/' . $log->id_log_harian }}')"
                  class="bg-red-600 hover:bg-red-400 duration-200 cursor-pointer w-16 text-center font-roboto rounded-r-full py-1 text-white">Hapus</button>
              </div>
            </td>
            <!-- Add more table cells for other attributes -->
          </tr>
        @endforeach
      </tbody>
    </table>

    @if (count($daftar_pegawai) >= 1)
      <h2 class="text-4xl font-righteous text-yellow-600 mb-4 text-center">Daftar Pegawai Bawahan</h2>
      <table class="w-[40rem] border mx-auto border-neutral-600 mb-20">
        <thead>
          <tr>
            <th class="px-4 py-2 text-white bg-neutral-600 w-[8rem]">Nama</th>
            <th class="px-4 py-2 text-white bg-neutral-600">Email</th>
            <th class="px-4 py-2 text-white bg-neutral-600">Action</th>
            <!-- Add more table headers as needed -->
          </tr>
        </thead>
        <tbody>
          @foreach ($daftar_pegawai as $pegawai)
            <tr>
              <td class="px-4 py-2 border-neutral-400 border">{{ $pegawai->nama_pegawai }}</td>
              <td class="px-4 py-2 border-neutral-400 border">{{ $pegawai->email }}</td>
              <td class="px-4 py-2 border-neutral-400 border text-center"><a
                  class="text-center font-roboto text-white bg-blue-800 hover:bg-white hover:text-blue-800 hover:shadow-md hover:shadow-emerald-600/40 py-2 px-6 rounded-full duration-200"
                  href="/log-harian/verifikasi/{{ $pegawai->id_pegawai }}">Lihat Log Harian</a></td>
              <!-- Add more table cells for other attributes -->
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
</body>

</html>
