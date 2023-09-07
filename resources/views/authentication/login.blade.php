<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log Harian</title>
  @vite('resources/css/app.css')

</head>

<body class="w-full h-screen flex items-center bg-gradient-to-br from-blue-950 to-neutral-800 justify-center">
  <x-flash-message url="/login" />
  <div class="rounded-xl overflow-hidden flex lg:w-[60rem] md:w-[50rem] sm:w-[40rem] w-[30rem] h-[36rem] bg-neutral-100 items-center">
    <div class="flex-1 flex flex-col items-center text-center gap-2">
      <h1 class="text-yellow-500 text-3xl font-righteous">LOGIN</h1>
      <form action="/login" class="flex-1 flex-col flex gap-2" method="post">
        @csrf
        <div class="flex flex-col items-start w-[20rem]">
          <p class="text-yellow-500 font-medium mx-2">Email</p>
          <input type="email" placeholder="user@mail.com" name="email" required oninput="this.setCustomValidity('')"
            class="outline-none text-neutral-400 font-medium placeholder:text-neutral-400 border-2 border-neutral-400 focus:text-yellow-500 duration-200 w-full  rounded-md py-1 px-2 focus:border-yellow-500">
        </div>
        <div class="flex flex-col items-start w-[20rem]">
          <p class="text-yellow-500 font-medium mx-2">Password</p>
          <input type="password" placeholder="password" name="password" required oninvalid="this.setCustomValidity('Semua data harus diisi')"
            autofocus="" oninput="this.setCustomValidity('')"
            class="outline-none text-neutral-400 font-medium placeholder:text-neutral-400 border-2 border-neutral-400 focus:text-yellow-500 duration-200 w-full rounded-md py-1 px-2 focus:border-yellow-500">
        </div>
        <button type="submit"
          class="w-[15rem] text-white hover:text-yellow-500 hover:bg-white bg-yellow-500 rounded-full hover:shadow-md hover:shadow-black duration-200 py-1 cursor-pointer font-medium self-center my-2 text-lg">LOGIN</button>
        <div class="flex text-sm font-medium self-center">
          <p class="text-neutral-600">
            Doesn't have account?
            <a href="#" class="hover:text-teal-400 duration-200">Sign Up</a>
          </p>
        </div>
      </form>
    </div>

  </div>
</body>

</html>
