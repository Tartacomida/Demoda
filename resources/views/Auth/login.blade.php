@extends('layouts.app')
@section('tittle', 'Login')

@section('content')

    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
    rounded-lg shadow-lg">
        <h1 class="text-3xl text-center font-bold">Bienvenido a Demoda</h1>
        <form class="mt-4"method="POST"action="login">
            @csrf

            <input type="text"class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"placeholder="User"
            id="username"name="username">

            <input type="password"class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"placeholder="Password"
            id="password"name="password">
            @error('message')
                <p class="border border-red-500 rounded-md bg-red-100 w-full
                text-red-600p-2my-2">hubo un problema</p>  
            @enderror
            

            <button type="submit"class="rounded-md bg-red-200 w-full text-lg
            text-white font-semibold p-2 my-3 hover:bg-indigo-600">Ingresar</button>

        </form>
    </div>
    
    
@endsection