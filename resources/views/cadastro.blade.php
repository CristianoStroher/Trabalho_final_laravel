<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>CADASTRO</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/cadastro.css')}}">

</head>

<body>

	<header>

		<nav>

			<div id="logo">
				<a href="#"><img src="imagens/logo200.png" alt="logo"></a>
			</div>

			<ul>

					<li>
						<svg width="20%" viewBox="0 0 41 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 13.2292L20.375 2L38.75 13.2292" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M34.6667 20.375V33.4417C34.6667 34.1183 34.1183 34.6667 33.4417 34.6667H7.30834C6.6318 34.6667 6.08334 34.1183 6.08334 33.4417V20.375" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
						<a href="{{ route('index') }}" class="menutopo">HOME</a><p>|</p></li>

					<li>
						<svg width="20%" viewBox="0 0 47 44" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5835 14.0455L22.0383 3.0579C22.7384 1.64737 24.7616 1.64737 25.4617 3.0579L30.9164 14.0455L43.1151 15.8184C44.6803 16.0458 45.304 17.9587 44.171 19.056L35.3456 27.6028L37.4283 39.6769C37.6959 41.2276 36.0589 42.4099 34.6584 41.6776L23.75 35.9738L12.8415 41.6776C11.4411 42.4099 9.80409 41.2276 10.0715 39.6769L12.1543 27.6028L3.32908 19.056C2.19596 17.9587 2.81977 16.0458 4.3849 15.8184L16.5835 14.0455Z" fill="#DE6B16" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<a href="" class="menutopo">RESERVAS</a>
						<p>|</p>
					</li>

					<li>
						<svg width="20%" viewBox="0 0 46 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.25 43C34.5717 43 43.75 33.8217 43.75 22.5C43.75 11.1782 34.5717 2 23.25 2C11.9282 2 2.75 11.1782 2.75 22.5C2.75 33.8217 11.9282 43 23.25 43Z" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M29.4 15.325C27.9958 13.9208 25.5228 12.944 23.25 12.8829M23.25 12.8829C20.5459 12.8101 18.125 14.0335 18.125 17.375C18.125 23.525 29.4 20.45 29.4 26.6C29.4 30.1076 26.3992 31.6147 23.25 31.5016M23.25 12.8829V9.17502M17.1 28.65C18.4212 30.4116 20.8778 31.4163 23.25 31.5016M23.25 31.5016V35.825" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
						<a href="" class="menutopo">TARIFAS</a><p>|</p></li>

					<li>
						<svg width="20%" viewBox="0 0 48 45" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.896 42.8413H12.1807C6.97226 42.8413 2.75 38.619 2.75 33.4106V18.5752C2.75 15.2774 4.47254 12.2193 7.29274 10.51L19.0811 3.36559C22.0855 1.5448 25.8526 1.5448 28.857 3.36559L40.6454 10.51C43.4656 12.2193 45.1881 15.2774 45.1881 18.5752V33.4106C45.1881 38.619 40.9658 42.8413 35.7574 42.8413H31.0421M16.896 42.8413V33.4106C16.896 29.5042 20.0626 26.3376 23.9691 26.3376C27.8755 26.3376 31.0421 29.5042 31.0421 33.4106V42.8413M16.896 42.8413H31.0421" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
						<a href="" class="menutopo">EMPRESA</a><p>|</p></li>

					<li>
						<svg width="20%" viewBox="0 0 50 47" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M43.25 20C43.25 10.0589 35.1912 2 25.25 2C15.3089 2 7.25 10.0589 7.25 20" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M2.75 29.9864V25.7636C2.75 23.6986 4.15533 21.8988 6.15859 21.3979L10.0726 20.4194C10.9246 20.2063 11.75 20.8507 11.75 21.7291V34.0209C11.75 34.8993 10.9246 35.5437 10.0726 35.3306L6.15859 34.3521C4.15533 33.8512 2.75 32.0515 2.75 29.9864Z" stroke="black" stroke-width="4"/><path d="M47.75 29.9864V25.7636C47.75 23.6986 46.3446 21.8988 44.3415 21.3979L40.4274 20.4194C39.5753 20.2063 38.75 20.8507 38.75 21.7291V34.0209C38.75 34.8993 39.5753 35.5437 40.4274 35.3306L44.3415 34.3521C46.3446 33.8512 47.75 32.0515 47.75 29.9864Z" stroke="black" stroke-width="4"/><path d="M43.25 35.75V36.875C43.25 39.3603 41.2353 41.375 38.75 41.375H30.875" stroke="black" stroke-width="4"/><path d="M28.625 44.75H21.875C20.011 44.75 18.5 43.2389 18.5 41.375C18.5 39.5111 20.011 38 21.875 38H28.625C30.4889 38 32 39.5111 32 41.375C32 43.2389 30.4889 44.75 28.625 44.75Z" stroke="black" stroke-width="4"/></svg>
						<a href="" class="menutopo">CONTATOS</a><p>|</p></li>

					<li>
						<svg width="20%" viewBox="0 0 44 49" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 46V43.3125C3 32.9226 11.4227 24.5 21.8125 24.5C32.2024 24.5 40.625 32.9226 40.625 43.3125V46" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M21.8125 24.5C27.7495 24.5 32.5625 19.687 32.5625 13.75C32.5625 7.81294 27.7495 3 21.8125 3C15.8754 3 11.0625 7.81294 11.0625 13.75C11.0625 19.687 15.8754 24.5 21.8125 24.5Z" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/></svg>
						<a href="#" class="menutopo">ACESSAR</a></li>

			</ul>

									
		</nav>

	</header>

	<article>


		

	<div id="topo">
			<div id="icon">
				<svg width="65" height="65" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M36.5 70C55.0015 70 70 55.0015 70 36.5C70 17.9985 55.0015 3 36.5 3C17.9985 3 3 17.9985 3 36.5C3 55.0015 17.9985 70 36.5 70Z" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/><path d="M61.625 57.4375C58.8549 47.9171 48.2269 44.7698 36.5 44.7698C25.0786 44.7698 14.4288 48.4079 11.375 57.4375M36.5 11.375C43.4381 11.375 49.0625 16.9994 49.0625 23.9375V28.125C49.0625 35.0631 43.4381 40.6875 36.5 40.6875C29.5619 40.6875 23.9375 35.0631 23.9375 28.125V23.9375C23.9375 16.9994 29.5619 11.375 36.5 11.375Z" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</div>
			<h2>CADASTRO</h2>
		</div>
			
		<form method="POST" action="{{url('/cadastro')}}">
		
			@csrf
			@method('POST')
			@if($errors->any())
    			<div class="alert alert-danger">
        			<ul>
           				@foreach($errors->all() as $error)
                			<li>{{ $error }}</li>
            			@endforeach
        			</ul>
    			</div>
			@endif

			<div id="container">

				<div id="acesso">
					<h1>Já possui acesso?</h1> <a href="#">LOGIN</a>
				</div>

				<div id="esquerda">

					<input type="text" name="documento" id="documento" class="input-with-digital" required autofocus placeholder="Cpf ou Cnpj" onkeyup="verificarDocumento(this.value)">
					<br><br>

					<input type="text" name="nome" id="nome" class="input-with-pessoa" required autofocus placeholder="Nome ou Razão Social da Empresa">
					<br><br>

					<input type="date" name="data_nascimento" disabled id="data_nascimento" class="input-with-agenda" required autofocus placeholder="Data de nascimento">
					<br><br>						

					<input type="text" name="telefone" id="telefone" class="input-with-telefone" required autofocus placeholder="Telefone">
					<br><br>

					<input type="email" name="email" id="email" class="input-with-carta" required autofocus placeholder="E-mail">
					<br><br>

											
				</div>

				<div id="direita">

					<div id="endereco-topo">
						<input type="text" name="uf" id="uf" required autofocus placeholder="UF">
						<br><br>

						<input type="text" name="cidade" id="cidade" required placeholder="Cidade">
						<br><br>

						<input type="text" name="cep" id="cep" required placeholder="Cep">
						<br><br>

					</div>

					<br>
					<input type="text" name="endereco" id="endereco" class="input-with-endereco"required placeholder="Endereco">
					<br><br>

					<input type="password" name="senha" id="senha" class="input-with-cadeado" required autofocus placeholder="Senha">
					<br><br>

					<input type="password" name="repetir_senha" id="repetir_senha"  class="input-with-cadeado"  required placeholder="Confirmar senha">
					<br>

					<div id="senhaseguranca">
						<div id="caixa1">
							<h3>Atenção!</h3>
							<p>Para sua senha segurança cadastre uma senha com as seguintes características:</p>
						</div>
						<ul>
							<li>8 caracteres;</li>
							<li>2 letras maiúsculas: ABCDEFG;</li>
							<li>1 letra minúscula: abcdefgh;</li>
							<li>1 número: 123456;</li>
							<li>2 símbolos: @#$%.</li>
							
						</ul>
					</div>

					@if($errors->has('repetir_senha'))
    					<div class="alert alert-danger">
        					{{ $errors->first('repetir_senha') }}
    					</div>
					@endif
					<br>				

					<button type="submit" id="criar-usuario">CADASTRAR</button>


				</div>
						

			</div>
		</form>		

	</article>

	<footer>

		<p>&copy; 2023 - Cristiano Alberto Stroher<p>


	</footer>

<!- Codigos Javas script ->

<script>
    function verificarDocumento(valor) {
        var documentoInput = document.getElementById('documento');
        var dataNascimentoInput = document.getElementById('data_nascimento');

        var documentoDigits = valor.replace(/\D/g, '');

        if (documentoDigits.length === 11) {
            dataNascimentoInput.disabled = false;
        } else {
            dataNascimentoInput.disabled = true;
        }
    }

	function formatarData(input) {
    // Obtém o valor digitado pelo usuário
    var dataDigitada = input.value;

    // Verifica se o valor digitado possui 8 caracteres (DD/MM/AAAA)
    if (dataDigitada.length === 8) {
      // Extrai o dia, mês e ano
      var dia = dataDigitada.substr(0, 2);
      var mes = dataDigitada.substr(2, 2);
      var ano = dataDigitada.substr(4, 4);

      // Formata a data no formato AAAA-MM-DD
      var dataFormatada = ano + "-" + mes + "-" + dia;

      // Define o valor formatado no campo de entrada de data
      input.value = dataFormatada;
    }
  }

  // Obtém a referência do campo de entrada de data
  var campoDataNascimento = document.getElementById('data_nascimento');

  // Adiciona um evento de digitação para formatar a data automaticamente
  campoDataNascimento.addEventListener('keyup', function() {
    formatarData(this);
  });
  
</script>



</body>

</html>