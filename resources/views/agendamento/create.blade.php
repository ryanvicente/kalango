@extends('layouts.app')
@section('title','Agendar Visita')
@section('content')
<div class='flex justify-center py-10 px-4'>
<div class='w-full max-w-2xl'>
<h1 class='text-white text-4xl font-black text-center'>Agendar Visita</h1>
<form method='POST' action='{{ route('agendamento.store') }}' class='mt-8 space-y-6'>
@csrf
<label class='flex flex-col'>
<span class='text-white pb-2'>Nome</span>
<input name='nome' class='p-3 rounded bg-gray-800 border text-white' required>
</label>
<label class='flex flex-col'>
<span class='text-white pb-2'>Email</span>
<input type='email' name='email' class='p-3 rounded bg-gray-800 border text-white' required>
</label>
<label class='flex flex-col'>
<span class='text-white pb-2'>Telefone</span>
<input name='telefone' class='p-3 rounded bg-gray-800 border text-white'>
</label>
<label class='flex flex-col'>
<span class='text-white pb-2'>Data</span>
<input type='date' name='data' class='p-3 rounded bg-gray-800 border text-white' required>
</label>
<label class='flex flex-col'>
<span class='text-white pb-2'>Horário</span>
<select name='horario' class='p-3 rounded bg-gray-800 border text-white'>
<option>Manhã</option><option>Tarde</option>
</select>
</label>
<button class='w-full bg-primary text-black p-3 rounded font-bold'>Enviar</button>
</form>
</div></div>
@endsection
