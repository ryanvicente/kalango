@extends('layouts.dashboard')
@section('dashboard')
<h1 class='text-white text-4xl font-bold mb-6'>Bem-vindo(a)!</h1>
<form action='{{ route('logout') }}' method='POST'>@csrf<button class='bg-red-500 text-white px-4 py-2 rounded'>Sair</button></form>
@endsection
