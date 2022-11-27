@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
        <h1 class="text-3xl text-center font-bold">Registro</h1>
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <div class="my-4">
                <label for="name" class="block">Nombre</label>
                <input type="text" name="name" id="name" class="block w-full border border-gray-200 rounded-lg p-2">
            </div>
            <div class="my-4">
                <label for="email" class="block">Email</label>
                <input type="email" name="email" id="email" class="block w-full border border-gray-200 rounded-lg p-2">
            </div>
            <div class="my-4">
                <label for="password" class="block">Password</label>
                <input type="password" name="password" id="password" class="block w-full border border-gray-200 rounded-lg p-2">
            </div>
            <div class="my-4">
                <label for="password_confirmation" class="block">Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="block w-full border border-gray-200 rounded-lg p-2">
            </div>
            <p class="border border-red-500 rounded-md bg-red w-full text-red-600 p-2 my-2">*Error</p>
            <div class="my-4">
                <button type="submit" class="block w-full bg-indigo-500 text-white rounded-lg p-2">Registrar</button>
            </div>
        </form>
    </div>
@endsection