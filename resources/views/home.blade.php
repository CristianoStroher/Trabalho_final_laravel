@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<div class="textos-divs">
				<p>Relação de Usuários</p>
			@if (isset($usuarios))
				<table>
					<tr>
						<th>Item</th>
						<th>Nome</th>
						<th>CPF</th>
						<th>CNPJ</th>
						<th>Email</th>
						<th>Contato</th>
						<th>Endereço</th>
						<th>Cidade</th>
					</tr>
					@foreach ($usuarios as $usuario)
						<tr>
							<td><input type="checkbox" name="selecionar[]" value="{{ $usuario->id }}"></td>
							<td>{{ $usuario->name }}</td>
							<td>{{ $usuario->cpf }}</td>
							<td>{{ $usuario->cnpj }}</td>
							<td>{{ $usuario->email }}</td>
							<td>{{ $usuario->telefone }}</td>
							<td>{{ $usuario->endereco }}</td>
							<td>{{ $usuario->cidade }}</td>
						</tr>
					@endforeach
				</table>
			</div>
