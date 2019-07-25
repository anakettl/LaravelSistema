<?php

namespace App\Http\Controllers; //o namespace deve reproduzir a arvore de diretorios

use Illuminate\Http\Request; //esta usando a classe iluminate para a requisição

use App\Serie;

class SeriesController extends Controller{ //herda da classe controles algumas funcionalidades
	public function index(Request $request){


	$series=['Once upon a time', 'Dark', 'Stranger Things'];


	//return view('series.index', ['series' => $series]); //não é necessario escrever dessa forma return view(view:'series.index'); 

	return view('series.index', compact('series')); //outra forma de fazer isso, se no array a chave e o valor tem o mesmo nome, pode chamar uma função do php chamada compact, essa função retorna um array

	//dentro do arquivo view, buscar na pasta series o index, não precisa informar a extensão

}

	public function create()
	{
		
		return view('series.create');
	}

	public function store(Request $request)
	{
		$nome = $request->nome;
		//atribui o elemento enviado no formulário com o nome de "nome"
		 $serie = new Serie();
		//criar uma serie
		 $serie->nome = $nome;
		//serie nome recebe o nome da serie passado no formulario
		var_dump($serie->save());
		//desta serie chamar o método save

	}
	
}
