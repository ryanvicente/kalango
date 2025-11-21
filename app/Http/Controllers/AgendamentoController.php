<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AgendamentoController extends Controller {
    public function create(){ return view('agendamento.create'); }
    public function store(Request $r){
        $r->validate(['nome'=>'required','email'=>'required|email','telefone'=>'nullable','data'=>'required','horario'=>'required']);
        $s=app('supabase');
        $i=$s->from('agendamentos').insert([ 'nome'=>$r->nome,'email'=>$r->email,'telefone'=>$r->telefone,'data'=>$r->data,'horario'=>$r->horario ]);
        if(isset($i['error'])) return back()->with('error','Erro ao salvar agendamento.');
        return back()->with('success','Agendamento registrado!');
    }
}
