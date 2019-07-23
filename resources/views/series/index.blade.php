

@extends ('series/layout')

@section('cabecalho')
Séries
@endsection

			
@section('conteudo')
	<a href="/LaravelSistema/public/series/create" class="btn btn-dark mb-2" >Adicionar</a>

		<ul class="list-group">
		<?php
			foreach ($series as $serie ): ?> 			
			<li class="list-group-item"> <?=$serie;?> </li>			
		<?php endforeach; ?>
		</ul>

@endsection
		

		