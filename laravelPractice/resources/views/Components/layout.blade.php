<!DOCTYPE html>
<html lang="en">
<head>
  @vite(['./resources/css/app.css','./resources/js/app.js'])
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title ?? "default title"}}</title>
</head>
<body class="bg-gray-900 text-gray-100 min-h-screen">

<div class="min-h-full">

  {{-- Navigation --}}
  @guest
  <x-nv>
    <x-nvLink href='/login' :clicked="request()->is('login')">Login</x-nvLink>
    <x-nvLink href='/register' :clicked="request()->is('register')">Register</x-nvLink>    
  </x-nv>
  @endguest
  @auth
  <x-nv>
    <form method="post" action="/logout">
      @csrf
      <x-submit>Logout</x-submit>
    </form>
  </x-nv>    
  @endauth
  {{-- Navigation --}}
  <!-- Header -->
  <header class="relative bg-gray-800 shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-white">{{$header ?? "default header"}}</h1>
    </div>
  </header>
  
  <!-- Main content -->
  <main class="bg-gray-900 py-10">
    <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:px-8">
      <div class="bg-gray-800 shadow-md rounded-lg p-6">
        {{$slot}}
      </div>
    </div>
  </main>

</div>
</body>
</html>
