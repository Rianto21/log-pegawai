<nav class="bg-blue-500 p-4 font-roboto">
  <div class="container mx-auto flex justify-between items-center">
    <a href="{{ route('home') }}" class="text-white text-xl font-bold">Home</a>
    <div class="flex gap-x-8 items-center">
      <a href="{{ route('log_harian') }}" class="text-white hover:underline">Log Harian</a>
      <a href="{{ route('daftar_pegawai') }}" class="text-white hover:underline">Pegawai</a>
      <a href="{{ route('about') }}" class="text-white hover:underline">About</a>
      <a href="#" class="text-white hover:underline">Contacts</a>
    </div>
    @guest('pegawai')
      <a href="{{ route('login') }}" class="text-white rounded-md bg-teal-600 hover:bg-teal-400 duration-200 px-2 py-1">Login</a>
    @else
      <div class="flex gap-x-4">
        <a href="{{ route('profile') }}" class="text-white rounded-md bg-teal-600 hover:bg-teal-400 duration-200 px-2 py-1">Profile</a>
        <a href="/logout" class="text-white rounded-md bg-red-600 hover:bg-red-400 duration-200 px-2 py-1">Log Out</a>
      </div>
    @endguest
  </div>
</nav>
