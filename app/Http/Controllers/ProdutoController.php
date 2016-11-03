<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;
/**
* 
*/
class ProdutoController extends Controller {

	public function lista(){

		//$produtos = DB::select('select * from produtos');

		//usando ORM
		$produtos = Produto::all();

		return view('produto.listagem')->with('produtos', $produtos);
		//return view('listagem')->with('produtos', array());

	}

	public function mostra($id){
		//$id = Request::route('id');

		/*$resposta =	DB::select('select * from produtos where id = ?', [$id]);
		if(empty($resposta)) {
			return "Esse produto não existe";
		}

		return view('produto.detalhes')->with('p', $resposta[0]);
		*/

		//com ORM
		$produto = Produto::find($id);
		if(empty($produto)){
			return "Esse produto não existe.";
		}

		return view('produto.detalhes')->with('p', $produto);
	}

	public function novo(){
		return view('produto.formulario');
	}

	public function adiciona(){
		/*$nome = Request::input('nome');
		$descricao = Request::input('descricao');
		$valor = Request::input('valor');
		$quantidade = Request::input('quantidade');

		DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)',
				   array($nome, $quantidade, $valor, $descricao));

		return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));*/

		Produto::create(Request::all());

		return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));


	}

	public function listaJson(){
		//$produtos = DB::select('select * from produtos');

		//listando com ORM
		$produtos = Produto::all();
		return response()->json($produtos);
	}

	public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();

		return redirect()->action('ProdutoController@lista');
	}

	public function editar($id){
		$produto = Produto::find($id);

		return view('produto.editar')->with('p', $produto);
	}

	public function update(){

		$produto = Produto::find(Request::input('id'));
		$produto->nome = Request::input('nome');
		$produto->descricao =  Request::input('descricao');
		$produto->valor = Request::input('valor');
		$produto->quantidade = Request::input('quantidade');
		$produto->save();
		return redirect()->action('ProdutoController@lista');

	}


}
?>