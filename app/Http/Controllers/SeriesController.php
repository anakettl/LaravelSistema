<?php

namespace App\Http\Controllers; //o namespace deve reproduzir a arvore de diretorios

use Illuminate\Http\Request; //esta usando a classe iluminate para a requisição
use App\Http\Requests\SeriesFormRequest;
use App\Serie;

class SeriesController extends Controller{ //herda da classe controles algumas funcionalidades
	public function index(Request $request){


	$series= Serie::query()
	->orderBy('nome')//usar o metodo query para ordenar a consulta do banco
	->get();//para pegar o resultado da consulta
	//all();//listar tudo como collection;
	//$series= Serie::all(); essa linha exibe o objeto com o atributo nome q esta inserido no banco como json
	$mensagem = $request->session()->get('mensagem');


	//return view('series.index', ['series' => $series]); //não é necessario escrever dessa forma return view(view:'series.index'); 

	return view('series.index', compact('series', 'mensagem')); //outra forma de fazer isso, se no array a chave e o valor tem o mesmo nome, pode chamar uma função do php chamada compact, essa função retorna um array

	//dentro do arquivo view, buscar na pasta series o index, não precisa informar a extensão

}

	public function create()
	{
		
		return view('series.create');
	}

	public function store(SeriesFormRequest $request) //utiliza o request com as regras de validacao
	{
		
		
		//Para armazenar não é necessário criar um uma variavel e depois atribuir, isso pode ser feito pela função
		$serie = Serie::create (['nome'=> $request->nome]);
		//vira um array associativo com os valores a serem passados para a model(tabela)
		$qtdTemporadas = $request->qtd_temporadas;
		for($i=1;$i <= $qtdTemporadas;$i++){
		//faz um laço de repeticao pra criar uma temporada conforme o valor inserido no input
			$temporada = $serie->temporadas()->create(['numero'=> $i]);
			
			for($j=1; $j <= $request->ep_por_temporada; $j++){
				$episodio = $temporada->episodios()->create(['numero'=>$j]);
			}
		}
		$request->session()
		->flash(//put( o metdo put é usado para colocar mensagens na tela, porém a mensagem fica fixa, no método flash a mensagem dura apenas uma sessão, após ser lida ela desaparece.
			'mensagem', 
			"Serie {$serie->id},temporadas e episodios criados com sucesso: {$serie->nome}"
		);
		//  $serie = new Serie();
		// //criar uma serie
		//  $serie->nome = $nome;
		// //serie nome recebe o nome da serie passado no formulario
		// var_dump($serie->save());
		//desta serie chamar o método save

		//session () funciona com os metodos de sessao do php

		//echo "Serie com id {$serie->id} armazenada com sucesso: {$serie->nome}";
		return redirect()->route('series.index'); //o retorno da função é a url de direcionamento

	}



	public function destroy(Request $request)
	{
		Serie::destroy($request->id);

		$request->session()
		->flash(
			'mensagem', 
			"Serie excluída com sucesso"

		);

		return redirect()->route('series.index');
		
	}
	
}
