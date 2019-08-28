

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
	<a href="{{route('form_criar_serie')}}" class="btn btn-dark mb-2" >Adicionar</a>
	<!--/LaravelSistema/public/series/create-->

		<ul class="list-group">
		<?php
			foreach ($series as $serie ): ?> 			
			<li class="list-group-item d-flex justify-content-between align-items-center"> {{$serie->nome}}
			<form method="post" action="/LaravelSistema/public/series/delete/{{$serie->id}}"
				onsubmit="return confirm ('Deseja remover {{addslashes($serie->nome)}}')">
				<!--addslashes é uma função do php para retornar uma string-->
				@csrf
				@method('DELETE')
				<button class="btn btn-danger btn-sm">
					<i class="far fa-trash-alt"></i><!--colocada imagem do font awesome no lugar da palavra excluir-->
				</button>
				
				
			</form>
			 </li>		<!--é possivel deixar dentro de duas chaves q o blade trata como codigo php-->	
		<?php endforeach; ?>
		</ul>


@endsection
		

		