@if (session()->has('message'))
<div class="absolute w-full h-full bg-neutral-500/50 flex items-center justify-center z-20">
  <div class="p-4 bg-white rounded-md flex flex-col items-center text-neutral-700 font-roboto font-medium gap-2 text-center">
    <h2 class="text-lg">Pesan!</h2>
    <p class="text-sm font-light text-neutral-400 w-[10rem]">{{ session()->get('message') }}</p>
    <a href="{{ $url }}" class="py-1 w-[7rem] text-center bg-red-500 text-white hover:text-red-500 hover:bg-white rounded-md hover:shadow-md hover:shadow-red-500/50">close</a>
  </div>
</div>
{{ session()->forget('pesan') }}
@endif