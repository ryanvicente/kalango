@extends('layouts.app')
@section('title','Registrar')
@section('content')
<div class='max-w-md mx-auto mt-16 p-6 bg-gray-900 rounded-lg text-white'>
<h1 class='text-3xl font-bold mb-6'>Criar Conta</h1>
@if(session('error'))<p class='text-red-400'>{{ session('error') }}</p>@endif
<form method='POST' action='{{ route('register') }}' class='flex flex-col gap-4'>
@csrf
<label>Nome Completo:</label><input type='text' name='name' class='p-3 rounded bg-gray-800 border'>
<label>Email:</label><input type='email' name='email' class='p-3 rounded bg-gray-800 border'>
<label>Senha:</label><input type='password' name='password' class='p-3 rounded bg-gray-800 border'>
<button class='mt-4 bg-primary text-black p-3 rounded font-bold'>Registrar</button>
</form></div>
@endsection
