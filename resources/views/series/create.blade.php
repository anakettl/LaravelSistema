@extends ('series/layout')

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')


		<a href="#" class="btn btn-dark mb-2" >Adicionar</a>

		<h2>Formulário</h2>

		<form method="POST">
			<div class="form-group">
				<label for="nome">Nome</label> <!--for="nome" deveria marcar a caixa de texto quando clicasse na label -->
				<input type="text" class="form-control" name="nome">
			</div>
		
			<button class="btn btn-primary">Adicionar</button>

		</form>
		
@endsection