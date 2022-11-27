<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Login</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>

  <body class="bg-gray-100 text-gray-800">
    <nav class="flex py-5 bg-indigo-500 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2x1 font-bold">My application</p>
        </div>
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            @if (auth()->check())
                <li class="mr-4">
                    Bienvenido {{ auth()->user()->name }}
                </li>
                <li class="mr-4">
                    <a href="{{ route('login.destroy') }}" class="font-semibold hover:bg-red-700 py-3 px-4 rounded-md">Log Out</a>
                </li>
            @else
                <li>
                    <a href="{{ route('login.index') }}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">Log In</a>
                </li>
                <li>
                    <a href="{{ route('register.index') }}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">Registro</a>
                </li>
            @endif
        </ul>
    </nav>
   
    @yield('content')


  </body>
</html>