<?php

namespace App\Models;

use App\Models\Usuario as ModelsUsuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'cpf',
        'cnpj',
        'data_nascimento',
        'telefone',
        'cidade',
        'cep',
        'uf',
        'endereco'
    ];

    public function updateUser($id, $name, $email, $cpf, $cnpj, $data_nascimento, $telefone, $cidade, $uf, $endereco)
    {
        $user = Usuario::find($id);
        $user->name = $name;
        $user->email = $email;
        $user->cpf = $cpf;
        $user->cnpj = $cnpj;
        $user->data_nascimento = $data_nascimento;
        $user->telefone = $telefone;
        $user->cidade = $cidade;
        $user->uf = $uf;
        $user->endereco = $endereco;
        $user->save();
        
    }
}
