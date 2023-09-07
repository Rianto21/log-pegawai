<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log Harian</title>
  @vite('resources/css/app.css')

</head>

<body class="font-roboto">
  <x-navbar />
  <h1 class="text-4xl text-yellow-600 text-center font-righteous my-4">Tambahkan Log Harian</h1>
  <div class="container mx-auto mt-8 flex justify-center">
    <form method="POST" action="{{ route('log_harian.edit_post', $log_harian->id_log_harian) }}" enctype="multipart/form-data"
      class="flex-col flex items-center">
      @csrf
      <div class="mb-4 ">
        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
        <input id="title" type="text" name="title" value="{{ $log_harian->title }}" class=" w-[20rem] outline-none border border-teal-600"
          required>
      </div>
      <div class="mb-4 ">
        <label for="body" class="block text-gray-700 text-sm font-bold mb-2">Body</label>
        <textarea id="body" name="body" class=" w-[20rem]  outline-none border border-teal-600" rows="4" required>{{ $log_harian->body }}</textarea>
      </div>
      <div class="mb-4 ">
        <label for="tanggal" class="block text-gray-700 text-sm font-bold mb-2">Tanggal</label>
        <input id="tanggal" type="date" name="tanggal" value="{{ $log_harian->tanggal }}" class=" w-[20rem]  outline-none border border-teal-600"
          required>
      </div>
      <div class="mb-4 ">
        <label for="foto" class="block text-gray-700 text-sm font-bold mb-2">Foto Kegiatan</label>
        <input id="foto" type="file" accept="image/*" name="foto" value="{{ $log_harian->foto }}"
          class=" w-[20rem]  outline-none border border-teal-600">
      </div>
      <!-- Add fields for other attributes -->
      <div class="mt-6">
        <button type="submit"
          class="text-center font-roboto text-white bg-emerald-600 hover:bg-white hover:text-emerald-600 hover:shadow-md hover:shadow-emerald-600/40 py-2 px-6 rounded-full duration-200">Create
          Log Harian</button>
      </div>
    </form>
  </div>

</body>

</html>
