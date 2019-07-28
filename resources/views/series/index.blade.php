

@extends ('series/layout')

@section('cabecalho')
Séries
@endsection

			
@section('conteudo')

@if(!empty($mensagem))
	<div class="alert alert-success">
	{{$mensagem}}
	</div>
@endif
	<a href="/LaravelSistema/public/series/create" class="btn btn-dark mb-2" >Adicionar</a>

		<ul class="list-group">
		<?php
			foreach ($series as $serie ): ?> 			
			<li class="list-group-item"> {{$serie->nome}}
			<form method="post" action="/LaravelSistema/public/series/delete/{{$serie->id}}"
				onsubmit="return confirm ('Deseja remover {{addslashes($serie->nome)}}')">
				<!--addslashes é uma função do php para retornar uma string-->
				@csrf
				@method('DELETE')
				<button class="btn btn-danger">Excluir</button>
				
			</form>
			 </li>		<!--é possivel deixar dentro de duas chaves q o blade trata como codigo php-->	
		<?php endforeach; ?>
		</ul>


@endsection
		

		