<?php

namespace App\Http\Controllers; //o namespace deve reproduzir a arvore de diretorios

use Illuminate\Http\Request; //esta usando a classe iluminate para a requisição

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

	public function store(Request $request)
	{
		$nome = $request->nome;
		//Para armazenar não é necessário criar um uma variavel e depois atribuir, isso pode ser feito pela função
		//atribui o elemento enviado no formulário com o nome de "nome"
		$serie = Serie::create (
		$request->all() //precisa ser informado no serie.php como preenchido
		);//vira um array associativo com os valores a serem passados para a model(tabela)
		$request->session()
		->flash(//put( o metdo put é usado para colocar mensagens na tela, porém a mensagem fica fixa, no método flash a mensagem dura apenas uma sessão, após ser lida ela desaparece.
			'mensagem', 
			"Serie {$serie->id}, criada com sucesso: {$serie->nome}"
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
