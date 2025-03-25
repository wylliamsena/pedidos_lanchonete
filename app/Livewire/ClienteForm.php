<?php

namespace App\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class ClienteForm extends Component
{
    public $nome, $endereco, $telefone, $cpf, $email, $password;

    public function salvar()
    {
        Cliente::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        session()->flash('message', 'Cliente cadastrado com sucesso!');
    }

    public function render()
    {
        return view('livewire.cliente-form');
    }

    
}
