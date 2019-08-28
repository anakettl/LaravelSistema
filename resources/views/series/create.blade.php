@extends ('series/layout')

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')

<!--se algum erro de validacao for encontrado-->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


		<form method="POST">
			@csrf
			<!--token para evitar o envio de falsas requisições-->
			<div class="form-group">
				<label for="nome">Nome</label> <!--for="nome" deveria marcar a caixa de texto quando clicasse na label -->
				<input type="text" class="form-control" name="nome">
			</div>
		
			<button class="btn btn-primary">Adicionar</button>

		</form>
		
@endsection