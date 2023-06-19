<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Usuario;



class UsuarioController extends Controller

{
    public function index()
    {
        $users = Usuario::all();
        return view('cadastro', ['users' => $users]);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // outras regras de validação
            'senha' => 'required|min:8', // regra de validação para o campo 'senha'
            'repetir_senha' => 'required|same:senha', // regra de validação para o campo 'repetir_senha'
        ], [
            'senha.required' => 'A senha é obrigatória.',
            'senha.min' => 'A senha deve ter no mínimo :min caracteres.',
            'repetir_senha.required' => 'A confirmação da senha é obrigatória.',
            'repetir_senha.same' => 'A confirmação da senha não corresponde à senha.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $user = new Usuario;
        $user->name = $request->input('nome');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('senha'));
    
        $documento = $request->input('documento');
    
        if (!empty($documento)) {
            // Remove caracteres não numéricos
            $documento = preg_replace('/[^0-9]/', '', $documento);
    
            // Verifica se é um CPF válido
            if (strlen($documento) === 11 && $this->ehCpf($documento)) {
                $user->cpf = $documento;
            }
            // Verifica se é um CNPJ válido
            elseif (strlen($documento) === 14 && $this->ehCnpj($documento)) {
                $user->cnpj = $documento;
            } else {
                $errors = ['documento' => 'CPF ou CNPJ inválido.'];
                return redirect()->back()->withErrors($errors)->withInput();
            }
    
            // Verifica se o CPF já existe na tabela
            if (Usuario::where('cpf', $documento)->exists()) {
                $errors = ['documento' => 'CPF já cadastrado.'];
                return redirect()->back()->withErrors($errors)->withInput();
            }
    
            // Verifica se o CNPJ já existe na tabela
            if (Usuario::where('cnpj', $documento)->exists()) {
                $errors = ['documento' => 'CNPJ já cadastrado.'];
                return redirect()->back()->withErrors($errors)->withInput();
            }
        }
    
        $user->data_nascimento = $request->input('data_nascimento');
        $user->telefone = $request->input('telefone');
        $user->cidade = $request->input('cidade');
        $user->cep = $request->input('cep');
        $user->uf = $request->input('uf');
        $user->endereco = $request->input('endereco');
        $user->save();
    
        return redirect('/principal')->with('success', 'Usuário criado com sucesso.');
    }
    
    
  

    private function ehCpf($cpf)
    {
        // Remove caracteres não numéricos do CPF    
        $cpf = preg_replace('/\D/', '', $cpf);

        // Verifica se o CPF possui 11 dígitos numéricos
        if (strlen($cpf) !== 11) {
            return false;
        }

        // Verifica se o CPF não é composto por dígitos repetidos
        if (preg_match('/^(\d)\1{10}$/', $cpf)) {
            return false;
        }

        return true;
    }

    private function ehCnpj($cnpj)
    {
        // Remove caracteres não numéricos do CPF    
        $cnpj = preg_replace('/\D/', '', $cnpj);

        // Verifica se o CNPJ possui 14 dígitos numéricos
        if (strlen($cnpj) !== 14) {
            return false;
        }

        // Verifica se o CNPJ não é composto por dígitos repetidos
        if (preg_match('/^(\d)\1{13}$/', $cnpj)) {
            return false;
        }

        return true;
    }

    //função crud usuario//
    public function historico()
    {
        $usuarios = Usuario::all();
        return view('historico', compact('usuarios'));
    }

    public function mostrar($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('mostrar', compact('usuario'));

        $itensPaginas = 8;
        $users = Usuario::paginate($itensPaginas);
        return view('mostrar', ['users' => $users]);
    }

    public function editar($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('editar', compact('usuario'));
    }

    public function atualizar(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
        return redirect()->route('historico')->with('success', 'Usuário atualizado com sucesso.');
    }

    public function excluir($id)
    {
        $user = Usuario::findOrFail($id);
        $user->delete();
        return redirect()->route('historico')->with('success', 'Usuário excluído com sucesso.');
    }

    public function atualizar_usuario($id, Request $request)
    {
            $user = $this->updateUser($id, $request->name, $request->email, $request->cpf,
            $request->cnpj,
            $request->data_nascimento,
            $request->telefone,
            $request->cidade,
            $request->uf,
            $request->endereco);
        return redirect('/cadastro');

       

    }

}

